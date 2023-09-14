<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProviderCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_category', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('name', 255);
            $table->string('image', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['active', 'inactive']);
            $table->integer('departament_id');
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
