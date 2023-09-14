<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdmFiancesCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_finances', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->enum('type', ['Entrada', 'Extorno', 'Retirada']);
            $table->integer('value');
            $table->integer('session');
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
        Schema::dropIfExists('adm_finances');
    }
}
