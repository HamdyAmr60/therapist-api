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
        Schema::create('doctors_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId("doctor_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("appointment_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors_appointments');
    }
};
