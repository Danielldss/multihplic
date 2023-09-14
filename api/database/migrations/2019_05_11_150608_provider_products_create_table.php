<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProviderProductsCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_products', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name', 255);
            $table->integer('value')->default(0);
            $table->integer('promotion_value')->default(0)->nullable();
            $table->integer('discount')->nullable(); // porcentagem ou valor
            $table->string('short_description', 500)->nullable();
            $table->longText('long_description')->nullable();
            $table->enum('free_shipping', ['sim', 'nao'])->default('nao');
            $table->integer('stock');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->integer('company_id');
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
        //
    }
}
