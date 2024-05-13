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
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->decimal("amount");
            $table->string("transaction_type");
            $table->string("source_account");
            $table->string("destination_account");
            $table->string("status");
            $table->text("ar_desc");
            $table->text("en_desc");
            $table->dateTime("time");
            $table->foreignId("payment_method_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("user_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("reservation_id")->constrained()->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_transactions');
    }
};
