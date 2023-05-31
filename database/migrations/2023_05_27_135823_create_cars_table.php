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
            $table->string('inside_color');
            $table->string('outside_color');
            $table->string('rim_size');
            $table->string('body_status');
            $table->string('gear_status');
            $table->string('engine_status');
            $table->string('keys_count');
            $table->string('hours_count');
            $table->enum('gear_box', ['Manual', 'Automatic']);
            $table->enum('fuel', ['petrol', 'diesel', 'electric', 'hybrid ']);
            $table->string('engine_size');
            $table->string('type');
            $table->string('code');
            $table->string('price');
            $table->enum('price_status', ['قابل للتفاوض', 'غير قابل للتفاوض']);
            $table->enum('status', ['متاحة', 'محجوزة', 'مباعة'])->default('متاحة');
            $table->bigInteger('category_id')->unsigned();
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
