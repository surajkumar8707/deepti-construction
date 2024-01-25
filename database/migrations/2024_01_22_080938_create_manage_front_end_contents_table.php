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
            $table->enum('page_type', [
                'architects_in_hosur',
                'architects_in_bangalore',
                'architects_in_chennai',
                'building_construction_contractors_hosur',
                'building_construction_contractors_bangalore',
                'building_construction_contractors_chennai',
                'interior_designers_in_hosur',
                'interior_designers_in_bangalore',
                'interior_designers_in_chennai',
                'house_construction_company_in_hosur',
                'house_construction_company_in_bangalore',
                'house_construction_company_in_chennai',
                'renovation_contractors_in_hosur',
                'house_renovation_contractors_bangalore',
                'house_renovation_contractors_chennai',
            ])->nullable();
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
