<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties_tbl', function (Blueprint $table) {

            $table->id('property_id');
            $table->string('property_title')->nullable();
            $table->string('property_description')->nullable();
            $table->integer('property_province_id')->nullable();
            $table->integer('city_mun_id')->nullable();
            $table->string('floor_area')->nullable();
            $table->string('lot_area')->nullable();
            $table->integer('property_price')->nullable();
            $table->integer('property_type_id')->nullable();
            $table->integer('owner_id')->nullable();
            $table->integer('property_image_id')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
