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
        Schema::create('service_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->string('patch_test')->nullable();
            $table->string('after_care_description')->nullable();
            $table->string('notification_reminder_days')->nullable();
            $table->string('notification_reminder_after')->nullable();
            $table->string('sales_tax')->nullable();
            $table->string('service_cost')->nullable();
            $table->string('service_cost_type')->nullable();
            $table->string('service_sku')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_settings');
    }
};
