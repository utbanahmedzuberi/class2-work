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
        schema::create('user' , function (Blueprint $table) { 
            $table->id();
            $table->string('Name' , 30);
            $table->string('Email' , 30)->unique();
            $table->string('address' , 50);
            $table->string('city' , 50);
            $table->enum('gender',["M","F","O"])->nullable();
            $table->string('Password' , 30);
            $table->boolean('status')->default(1);
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
        //
    }
};
