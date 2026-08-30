<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('teacher_profiles')) {
            return;
        }

        Schema::create('teacher_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nrc')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('social_media_link')->nullable();
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->foreignId('township_id')->nullable()->constrained('townships')->nullOnDelete();
            $table->text('detail_address')->nullable();
            $table->string('degree')->nullable();
            $table->date('graduated_at')->nullable();
            $table->string('university_school')->nullable();
            $table->string('career_level')->nullable();
            $table->string('experience_year')->nullable();
            $table->json('preferred_subject_ids')->nullable();
            $table->json('preferred_class_ids')->nullable();
            $table->json('preferred_township_ids')->nullable();
            $table->text('experience')->nullable();
            $table->string('teaching_video')->nullable();
            $table->json('teaching_modes')->nullable();
            $table->string('fees')->nullable();
            $table->string('nrc_file')->nullable();
            $table->string('degree_file')->nullable();
            $table->json('other_files')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teacher_profiles');
    }
};
