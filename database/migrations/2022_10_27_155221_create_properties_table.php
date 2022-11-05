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
        Schema::create('properties', function (Blueprint $table) {

            $table->id();
            $table->string('property_description')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('citymun_id')->nullable();
            $table->string('floor_area')->nullable();
            $table->string('lot_area')->nullable();
            $table->integer('property_price')->nullable();
            $table->integer('property_type')->nullable();
            $table->integer('owner_id')->nullable();
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
