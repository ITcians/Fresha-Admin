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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('service_type_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('description')->nullable();
            $table->integer('duration')->nullable();
            $table->string('price_type')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->string('extra_time_type')->nullable();
            $table->string('extra_time_duration')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
