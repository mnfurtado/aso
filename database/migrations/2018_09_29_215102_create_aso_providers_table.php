<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsoProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aso_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cnpj');
            $table->string('site');
            $table->string('contact_name');
            $table->string('contact_number');
            $table->string('contact_email');            
            
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('aso_providers');
    }
}
