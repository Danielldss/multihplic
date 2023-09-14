<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShopCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_company', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name', 255);
            $table->string('socialName', 255);
            $table->string('email', 255);
            $table->string('url', 255)->nullable();
            $table->string('telephone', 45)->nullable();
            $table->string('celphone', 255)->nullable();
            $table->string('cpf', 255)->nullable();
            $table->string('cnpj', 255)->nullable();
            $table->string('rg', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('number', 255)->nullable();
            $table->string('sector', 255)->nullable();
            $table->string('complement', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->enum('type', ['fisica', 'juridica'])->default('juridica');
            $table->enum('segment', ['individual', 'representative'])->default('representative');
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
        Schema::dropIfExists('shop_company');
    }
}
