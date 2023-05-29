<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('manufacturing_year');
            $table->string('manufacturing_country');
            $table->string('kilometers');
            $table->string('warranty')->default('بدون ضمان');
            $table->string('color');
            $table->enum('gear_box', ['Manual', 'Automatic']);
            $table->enum('fuel', ['petrol', 'diesel', 'electric', 'hybrid ']);
            $table->string('engine_size');
            $table->string('type');
            $table->string('code');
            $table->string('price');
            $table->enum('price_status', ['قابل للتفاوض', 'غير قابل للتفاوض']);
            $table->enum('status', ['متاحة', 'محجوزة', 'مباعة'])->default('متاحة');
            $table->bigInteger('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
