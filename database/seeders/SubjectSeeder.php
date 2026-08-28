<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $subjects = [
            ['slug' => 'myanmar', 'name' => 'မြန်မာစာ (Myanmar)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'english', 'name' => 'အင်္ဂလိပ်စာ (English)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'mathematics', 'name' => 'သင်္ချာ (Mathematics)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'chemistry', 'name' => 'ဓာတုဗေဒ (Chemistry)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'physics', 'name' => 'ရူပဗေဒ (Physics)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'biology', 'name' => 'ဇီဝဗေဒ (Biology)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'economics', 'name' => 'ဘောဂဗေဒ (Economics)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'geography', 'name' => 'ပထဝီဝင် (Geography)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'history', 'name' => 'သမိုင်း (History)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'general_science', 'name' => 'အထွေထွေသိပ္ပံ (General Science)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'social_studies', 'name' => 'လူမှုရေးသိပ္ပံ (Social Studies)', 'category' => 'အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)'],
            ['slug' => 'primary_all', 'name' => 'ဘာသာစုံ (All Subjects)', 'category' => 'မူလတန်းအဆင့် (Grade 1 - 5)'],
            ['slug' => 'igcse', 'name' => 'IGCSE', 'category' => 'International Curriculum'],
            ['slug' => 'ged', 'name' => 'GED', 'category' => 'International Curriculum'],
            ['slug' => 'sat', 'name' => 'SAT', 'category' => 'International Curriculum'],
            ['slug' => 'ielts', 'name' => 'IELTS Preparation', 'category' => 'International Curriculum'],
            ['slug' => 'lang_english', 'name' => 'General English / 4 Skills', 'category' => 'ဘာသာစကား (Languages)'],
            ['slug' => 'lang_japanese', 'name' => 'ဂျပန်စာ (Japanese - N5 to N1)', 'category' => 'ဘာသာစကား (Languages)'],
            ['slug' => 'lang_chinese', 'name' => 'တရုတ်စာ (Chinese - HSK)', 'category' => 'ဘာသာစကား (Languages)'],
            ['slug' => 'lang_korean', 'name' => 'ကိုရီးယားစာ (Korean)', 'category' => 'ဘာသာစကား (Languages)'],
            ['slug' => 'comp_basic', 'name' => 'Computer Basic & Office Use', 'category' => 'နည်းပညာနှင့် ကွန်ပျူတာ'],
            ['slug' => 'comp_programming', 'name' => 'Coding & Web Development', 'category' => 'နည်းပညာနှင့် ကွန်ပျူတာ'],
            ['slug' => 'comp_design', 'name' => 'Graphic Design & Photo Editing', 'category' => 'နည်းပညာနှင့် ကွန်ပျူတာ'],
        ];

        $categories = collect($subjects)
            ->pluck('category')
            ->unique()
            ->map(fn (string $name): array => [
                'slug' => 'subject_' . md5($name),
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ])
            ->values()
            ->all();

        DB::table('subject_categories')->upsert($categories, ['name'], ['slug', 'updated_at']);

        $categoryIds = DB::table('subject_categories')->pluck('id', 'name');
        $subjects = array_map(function (array $subject) use ($categoryIds, $now): array {
            $categoryName = $subject['category'];
            unset($subject['category']);

            return [
                ...$subject,
                'category_id' => $categoryIds[$categoryName],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $subjects);

        DB::table('subjects')->upsert(
            $subjects,
            ['slug'],
            ['name', 'category_id', 'updated_at'],
        );
    }
}
