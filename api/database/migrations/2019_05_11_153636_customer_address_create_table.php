<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerAddressCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_address', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('number', 255);
            $table->string('complement', 255)->nullable();
            $table->string('sector', 255)->nullable();

            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('cep', 255)->nullable();

            $table->enum('type', ['residential', 'commercial']);
            $table->enum('use', ['sim', 'nao']);

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
