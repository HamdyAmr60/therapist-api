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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId("doctor_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("reservation_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->text("comment");
            $table->string("rate");
            $table->string("patient_name");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
