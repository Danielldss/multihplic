<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProviderCompanyCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_company', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->string('socialName', 255);
            $table->string('fantasyName', 255);
            $table->string('emailCompany', 255);
            $table->string('address', 255)->nullable();
            $table->string('number', 255)->nullable();
            $table->string('complement', 255)->nullable();
            $table->string('sector', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('cep', 255)->nullable();
            $table->string('cpfCnpj', 255);
            $table->text('observations')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->enum('situation', ['aprove', 'reprove', 'pending'])->default('pending');

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
        Schema::dropIfExists('provider_company');
    }
}
