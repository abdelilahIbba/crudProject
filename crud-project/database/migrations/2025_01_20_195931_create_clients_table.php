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
            $table->string('model');         // Car model (e.g., "Civic")
            $table->string('make');          // Car make (e.g., "Honda")
            $table->year('year');            // Manufacturing year
            $table->string('fuel_type');     // Fuel type (e.g., "Petrol", "Diesel")
            $table->decimal('daily_price', 8, 2); // Daily rental price
            $table->text('description');     // Car description
            $table->string('image');         // Image file path
            $table->timestamps();           // Created at & Updated at timestamps
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
