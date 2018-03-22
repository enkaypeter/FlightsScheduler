<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFleetAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_assignments', function (Blueprint $table) {
            $table->increments('fleet_id');
            $table->string('Airline_Name');
            $table->string('Route_Origin');
            $table->string('Route_Destination');
            $table->string('Aircraft_Name');
            $table->string('Staff_1');
            $table->string('Staff_2');
            $table->string('Staff_3');
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
        Schema::dropIfExists('fleet_assignments');
    }
}
