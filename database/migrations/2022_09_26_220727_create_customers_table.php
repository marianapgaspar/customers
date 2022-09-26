<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',75)->nullable();
            $table->string('last_name',75)->nullable();
            $table->string('email',120)->nullable();
            $table->string('gender',15)->nullable();
            $table->string('ip_address',15)->nullable();
            $table->string('company',120)->nullable();
            $table->string('city',75)->nullable();
            $table->string('title',120)->nullable();
            $table->string('website',120)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
