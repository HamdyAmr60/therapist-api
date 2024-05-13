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
        Schema::table('users', function (Blueprint $table) {
            $table->string("status",255);
            $table->string("verification_code",11);
            $table->dateTime("birth_date");
            $table->enum("gender",["male", "female"])->default("male");
            $table->string("last_name",255);
            $table->string("type",255);
            $table->string("phone",255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
