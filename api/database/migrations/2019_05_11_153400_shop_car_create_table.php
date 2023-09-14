<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopCarCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_car', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('number');
            $table->integer('value_variation_id')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('unity_value');
            $table->integer('value');
            $table->integer('product_id');
            $table->integer('customer_id');
            $table->integer('shop_id');
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
        Schema::dropIfExists('shop_car');
    }
}
