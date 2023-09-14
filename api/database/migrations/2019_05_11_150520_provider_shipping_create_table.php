<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProviderShippingCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_shipping', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('company_id');
            $table->string('name');
            $table->string('cdCompany')->nullable();
            $table->string('psCompany')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_shipping');
    }
}
