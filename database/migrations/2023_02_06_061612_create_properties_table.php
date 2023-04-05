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
            $table->string('title')->required();
            $table->string('location_id')->required();
            $table->string('bedroom')->required();
            $table->string('bathroom')->required();
            $table->string('property_type')->required();
            $table->string('service_type')->required();
            $table->string('payment_type')->required();
            $table->tinyInteger('property_status')->default('0');
            $table->longText('property_description');
            $table->string('size');
            $table->longText('images')->required();
            $table->string('price')->required();

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
