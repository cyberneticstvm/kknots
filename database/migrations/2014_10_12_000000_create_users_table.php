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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('profile_id')->unique()->nullable();
            $table->unsignedBigInteger('gender')->nullable();
            $table->date('dob')->nullable();
            $table->unsignedBigInteger('marital_status')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('mobile', 10)->unique();
            $table->string('whatsapp_number', 10)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('religion')->nullable();
            $table->unsignedBigInteger('caste')->nullable();
            $table->unsignedBigInteger('subcaste')->nullable();
            $table->unsignedBigInteger('role')->nullable();
            $table->unsignedBigInteger('partner_id')->comment('If role is Freelancer, Partner ID should be there which freelancer appointed by')->nullable();
            $table->unsignedBigInteger('plan')->nullable();
            $table->date('plan_expired_on')->nullable();
            $table->string('referral_code', 25)->nullable();
            $table->unsignedBigInteger('how_to_know')->nullable();
            $table->integer('verified')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
