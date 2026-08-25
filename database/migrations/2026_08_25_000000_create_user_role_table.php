<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->id();
            $table->string('role')->unique();
            $table->timestamps();
        });

        DB::table('user_role')->insert([
            ['role' => 'parent', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'teacher', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
