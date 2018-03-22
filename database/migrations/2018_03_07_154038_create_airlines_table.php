<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('airlines', function (Blueprint $table) {
        //     $table->increments('Airline_id');
        //     $table->string('Name');
        //     $table->string('Address');
        //     $table->string('Phone');
        //     $table->string('Password');
        //     $table->string('Email')->unique();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airlines');
    }
}
