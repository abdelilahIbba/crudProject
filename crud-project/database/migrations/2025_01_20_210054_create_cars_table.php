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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('make');
            $table->year('year');
            $table->string('fuel_type');
            $table->decimal('daily_price', 8, 2);  // Daily rental price
            $table->enum('availability', ['available', 'unavailable'])->default('available');
            $table->string('image');  // Path to car image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
