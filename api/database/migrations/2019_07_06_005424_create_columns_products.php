<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provider_products', function (Blueprint $table) {
            $table->string('codigo')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('departament_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('subcategory_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
