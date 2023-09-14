<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProviderFilesCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_files', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('company_id');
            $table->integer('product_id');
            $table->string('slug', 255)->nullable();
            $table->string('arquive', 500)->nullable();
            $table->string('size', 100)->nullable();
            $table->string('mimetype', 100)->nullable();
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
        Schema::dropIfExists('provider_files');
    }

}
