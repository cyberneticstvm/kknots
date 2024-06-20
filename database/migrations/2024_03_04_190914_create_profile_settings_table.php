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
        Schema::create('profile_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->longText('bio')->nullable();
            $table->unsignedBigInteger('city')->nullable();
            $table->unsignedBigInteger('state')->nullable();
            $table->decimal('height', 5, 2)->nullable();
            $table->string('height_unit', 5)->nullable();
            $table->decimal('weight', 5, 2)->nullable();
            $table->text('address')->nullable();
            $table->text('is_challenged')->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('father_occupation', 150)->nullable();
            $table->string('mother_occupation', 150)->nullable();
            $table->smallInteger('number_of_brothers')->nullable();
            $table->smallInteger('number_of_sisters')->nullable();
            $table->smallInteger('number_of_married_brothers')->nullable();
            $table->smallInteger('number_of_married_sisters')->nullable();
            $table->string('contact_person_name', 150)->nullable();
            $table->string('contact_person_mobile', 10)->nullable();
            $table->string('relationship_with_candidate', 50)->nullable();
            $table->unsignedBigInteger('financial_status')->nullable();
            $table->unsignedBigInteger('occupation')->nullable();
            $table->string('company_name', 150)->nullable();
            $table->unsignedBigInteger('work_place')->nullable();
            $table->string('work_place_other', 150)->nullable();
            $table->unsignedBigInteger('qualification')->nullable();
            $table->unsignedBigInteger('salary')->nullable();
            $table->decimal('total_experience')->nullable();
            $table->string('school', 150)->nullable();
            $table->string('college', 150)->nullable();
            $table->unsignedBigInteger('marital_status_preference')->nullable();
            $table->unsignedBigInteger('cast_preference')->nullable();
            $table->decimal('height_from')->nullable();
            $table->decimal('height_to')->nullable();
            $table->integer('age_from')->nullable();
            $table->integer('age_to')->nullable();
            $table->unsignedBigInteger('native_place_preference')->nullable();
            $table->unsignedBigInteger('education_preference')->nullable();
            $table->unsignedBigInteger('occupation_preference')->nullable();
            $table->unsignedBigInteger('working_place_preference')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('horoscope')->nullable();
            $table->boolean('show_profile_photo')->default('1');
            $table->boolean('show_contact_number')->default('1');
            $table->boolean('show_address')->default('1');
            $table->boolean('show_email')->default('1');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_settings');
    }
};
