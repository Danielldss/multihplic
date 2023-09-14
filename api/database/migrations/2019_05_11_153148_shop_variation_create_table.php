<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopVariationCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_variation', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name', 255);
            $table->enum('type', ['color', 'size', 'unity'])->nullable();
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
        Schema::dropIfExists('shop_variation');
    }
}
