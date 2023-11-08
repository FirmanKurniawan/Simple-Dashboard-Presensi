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
        Schema::create('mq135_sensors', function (Blueprint $table) {
            $table->float('carbon_dioxide');
            $table->float('ion_ammonium');
            $table->float('toluen');
            $table->timestamptz('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mq135_sensors');
    }
};
