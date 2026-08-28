<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subject_categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::table('subjects', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('name')->constrained('subject_categories')->nullOnDelete();
        });

        foreach (DB::table('subjects')->whereNotNull('category')->distinct()->pluck('category') as $category) {
            $categoryId = DB::table('subject_categories')->insertGetId([
                'slug' => 'subject_' . md5($category),
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('subjects')->where('category', $category)->update(['category_id' => $categoryId]);
        }

        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }

    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->string('category')->nullable()->after('name');
        });

        DB::table('subjects')
            ->join('subject_categories', 'subjects.category_id', '=', 'subject_categories.id')
            ->update(['subjects.category' => DB::raw('subject_categories.name')]);

        Schema::table('subjects', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('subject_categories');
    }
};
