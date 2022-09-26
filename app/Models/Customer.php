<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'ip_address',
        'company',
        'city',
        'title',
        'website',
        'created_at',
        'updated_at'
    ];

    public function table(){
        $table = DB::table("customers")->get();
        return $table;
    }
    public function getWithoutLastName(){
        return DB::table("customers")->whereNull("last_name")->count();
    }
    public function getLastName(){
        return DB::table("customers")->whereNotNull("last_name")->count();
    }
    public function getValidEmail(){
        return DB::table("customers")->where("email","like","%@%")->count();
    }
    public function getInvalidEmail(){
        return DB::table("customers")->where("email","not like","%@%")->count();
    }
    public function getWithoutGender(){
        return DB::table("customers")->whereNull("gender")->count();
    }
    public function getGender(){
        return DB::table("customers")->whereNotNull("gender")->count();
    }
}
