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
        Schema::create('cars__specs', function (Blueprint $table) {
            $table->string('Horsepower');
            $table->string('Fuel');
            $table->string('Color');
            $table->string('Gearbox');
            $table->string('Engine');
            $table->string('No_Doors');
            $table->string('Year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars__specs');
    }
};
