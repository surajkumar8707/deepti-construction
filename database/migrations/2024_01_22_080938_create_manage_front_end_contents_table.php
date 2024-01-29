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
        Schema::create('manage_front_end_contents', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading')->nullable();
            $table->string('sub_heading')->nullable();
            $table->enum('page_type', array_keys(config('enums.page_type')))->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_front_end_contents');
    }
};
