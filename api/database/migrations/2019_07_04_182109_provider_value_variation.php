<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProviderValueVariation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_value_variation', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->integer('atribute_id');
            $table->integer('company_id');
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
