<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = new Customer();
        return view('pages.index',[
            'models'=>$model->table(),
            'without_last_name'=>$model->getWithoutLastName(),
            'with_last_name'=>$model->getLastName(),
            'valid_email'=>$model->getValidEmail(),
            'invalid_email'=>$model->getInvalidEmail(),
            'with_gender'=>$model->getGender(),
            'without_gender'=>$model->getWithoutGender()
        ]);
    }


    public function create(Request $request)
    {
        $contents = $request->file('file')->get();
        $lines = explode(PHP_EOL,$contents);
        unset($lines[0]); //removendo cabeçalho
        foreach ($lines as $line){
            $datas = explode(",",$line);
            $new = [];
            $new['id'] = $datas[0];
            $new['first_name'] = $datas[1];
            $new['last_name'] = $datas[2];
            $new['email'] = $datas[3];
            $new['gender'] = $datas[4];
            $new['ip_address'] = $datas[5];
            $new['company'] = $datas[6];
            $new['city'] = $datas[7];
            $new['title'] = $datas[8];
            $new['website'] = $datas[9];
            Customer::create($new);
        }
        return redirect()->route('home')->with(['success'=>'Integrated with success']);
    }

    public function integrate()
    {
        $contents = Storage::get('customers.csv');
        ddd($contents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
