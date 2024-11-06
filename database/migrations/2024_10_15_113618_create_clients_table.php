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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('image')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('pronouns')->nullable();
            $table->string('language')->nullable();
            $table->string('client_source')->nullable();
            $table->string('occupation')->nullable();
            $table->string('country')->nullable();
            $table->string('additional_email')->nullable();
            $table->string('additional_country_code')->nullable();
            $table->string('additional_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
