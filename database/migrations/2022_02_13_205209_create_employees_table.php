<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{

    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('salary');
            $table->date('birthdate');
            $table->string('postion');
            $table->string('department');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('gender');
            $table->string('nationality');
            $table->string('image');
            $table->string('marital_Status');
            $table->string('religion');
            $table->string('Bank_name');
            $table->string('Bank_accountNo');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
