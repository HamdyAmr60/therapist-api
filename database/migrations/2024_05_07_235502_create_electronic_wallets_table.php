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
        Schema::create('electronic_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId("payment_method_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->string("wallet_name");
            $table->string("account");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electronic_wallets');
    }
};
