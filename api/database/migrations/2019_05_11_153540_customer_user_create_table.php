<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerUserCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_user', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('cpf', 255)->nullable();
            $table->string('cnpj', 255)->nullable();
            $table->enum('type', ['juridica', 'fisica']);
            $table->string('telphone', 255)->nullable();
            $table->string('celphone', 255)->nullable();
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
        //
    }
}
