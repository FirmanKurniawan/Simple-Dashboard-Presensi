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
        Schema::create('mq2_sensors', function (Blueprint $table) {
            $table->float('lpg');
            $table->float('carbon_monoxide');
            $table->float('alcohol');
            $table->float('hidrogen');
            $table->timestamptz('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mq2_sensors');
    }
};
