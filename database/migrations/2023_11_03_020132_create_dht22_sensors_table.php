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
        Schema::create('dht22_sensors', function (Blueprint $table) {
            $table->float('temperature');
            $table->float('humidity');
            $table->float('heat_index');
            $table->timestamptz('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dht22_sensors');
    }
};
