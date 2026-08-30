<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('parent_profiles')) {
            return;
        }

        Schema::create('parent_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 36)->collation('utf8mb4_bin')->unique();
            $table->string('name');
            $table->string('phone', 30);
            $table->string('email');
            $table->text('address');
            $table->string('region');
            $table->string('township');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('google_map_location')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parent_profiles');
    }
};