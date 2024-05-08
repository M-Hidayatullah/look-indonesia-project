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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('domain_web');
            $table->string('images')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_youtube')->nullable();
            $table->string('linktree')->nullable();
            $table->string('link_twitter')->nullable();
            $table->longText('link_maps')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_wa_booking')->nullable();
            $table->longText('about_company')->nullable();
            $table->string('name_company')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configs');
    }
};
