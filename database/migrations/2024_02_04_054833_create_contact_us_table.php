<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('interest');
            $table->longText('message');
            $table->string('site_location')->nullable();
            $table->string('site_area')->nullable();
            $table->string('residential_building')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('materials')->nullable();
            $table->string('planning_execution')->nullable();
            $table->string('call_back')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
