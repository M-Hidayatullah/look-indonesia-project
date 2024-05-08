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
        // Schema::table('travel_packages', function (Blueprint $table) {
        //     $table->foreign('boats_id', 'boats_id_fk1')->references('id')->on('boats')->onUpdate('CASCADE')->onDelete('RESTRICT');
        //     $table->foreign('trips_id', 'trips_id_fk1')->references('id')->on('trips')->onUpdate('CASCADE')->onDelete('RESTRICT');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('travel_packages', function (Blueprint $table) {
        //     $table->dropForeign('boats_id_fk1');
        //     $table->dropForeign('trips_id_fk1');
        // });
    }
};
