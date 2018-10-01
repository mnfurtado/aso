<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsoCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aso_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('issuance_date');
            $table->date('due_date');
            $table->string('due');
            $table->string('file');     

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');  

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
        Schema::dropIfExists('aso_companies');
    }
}
