<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsoEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aso_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->date('aso_due_date');
            $table->integer('aso_days_left');
            $table->boolean('due');

            
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employee_tmps');

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
        Schema::dropIfExists('aso_employees');
    }
}
