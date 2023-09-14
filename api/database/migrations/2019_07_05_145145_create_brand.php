<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_brand', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('provider_brand');
    }
}
