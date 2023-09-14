<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopValueVariationCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_value_variation', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->integer('variation_id');
            $table->integer('shop_id');
            $table->string('name', 255);
            $table->integer('value');
            $table->integer('stock');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');

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
