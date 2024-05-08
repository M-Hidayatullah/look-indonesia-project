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
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            // $table->foreignId('boats_id')->nullable()->index('boats_id_fk1_idx');
            // $table->foreignId('trips_id')->nullable()->index('trips_id_fk1_idx');
            $table->string('slug');
            $table->string('location');
            $table->string('price');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};
