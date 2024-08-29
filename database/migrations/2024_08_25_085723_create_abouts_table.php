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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('heading_en');
            $table->text('heading_ar');
            $table->text('sub_heading_en');
            $table->text('sub_heading_ar');
            $table->text('vision_en');
            $table->text('vision_ar');
            $table->text('vision_image')->nullable();
            $table->text('mission_en');
            $table->text('mission_ar');
            $table->text('mission_image')->nullable();
            $table->text('approach_en');
            $table->text('approach_ar');
            $table->text('approach_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
