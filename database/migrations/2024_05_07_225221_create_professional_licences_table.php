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
        Schema::create('professional_licences', function (Blueprint $table) {
            $table->foreignId("doctor_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->string("syndicate_card");
            $table->string("status");
            $table->dateTime("verificated_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_licences');
    }
};