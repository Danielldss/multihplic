<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopRequestsCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_requests', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->enum('status', ['pending', 'payd', 'canceled']);
            $table->enum('situation', ['stock', 'separate', 'posted', 'delivered']);
            $table->integer('number');
            $table->integer('total');
            $table->integer('shipping_id');
            $table->integer('company_id');
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
        Schema::dba_replace('shop_requests');
    }
}
