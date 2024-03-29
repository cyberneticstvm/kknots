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
        Schema::create('profile_setting_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_setting_id');
            $table->string('name')->nullable();
            $table->string('category', 50)->nullable();
            $table->foreign('profile_setting_id')->references('id')->on('profile_settings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_setting_details');
    }
};
