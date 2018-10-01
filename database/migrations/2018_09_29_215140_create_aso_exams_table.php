<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsoExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aso_exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('issuance_date');
            $table->date('due_date');
            $table->string('file');        
            
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employee_tmps');
    

            $table->integer('aso_provider_id')->unsigned();
            $table->foreign('aso_provider_id')->references('id')->on('aso_providers');
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
        Schema::dropIfExists('aso_exams');
    }
}
