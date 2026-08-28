<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $groups = [
            ['slug' => 'early_years', 'name' => 'Early Years', 'sort_order' => 0],
            ['slug' => 'primary', 'name' => 'Primary School', 'sort_order' => 1],
            ['slug' => 'middle_school', 'name' => 'Middle School', 'sort_order' => 2],
            ['slug' => 'high_school', 'name' => 'High School', 'sort_order' => 3],
        ];

        DB::table('class_groups')->upsert(
            array_map(fn (array $group): array => [...$group, 'created_at' => $now, 'updated_at' => $now], $groups),
            ['slug'],
            ['name', 'sort_order', 'updated_at'],
        );

        $groupIds = DB::table('class_groups')->pluck('id', 'slug');
        $classes = [
            ['slug' => 'kg', 'name' => 'KG', 'group' => 'early_years', 'sort_order' => 0],
            ['slug' => 'grade1', 'name' => 'Grade 1', 'group' => 'primary', 'sort_order' => 1],
            ['slug' => 'grade2', 'name' => 'Grade 2', 'group' => 'primary', 'sort_order' => 2],
            ['slug' => 'grade3', 'name' => 'Grade 3', 'group' => 'primary', 'sort_order' => 3],
            ['slug' => 'grade4', 'name' => 'Grade 4', 'group' => 'primary', 'sort_order' => 4],
            ['slug' => 'grade5', 'name' => 'Grade 5', 'group' => 'primary', 'sort_order' => 5],
            ['slug' => 'grade6', 'name' => 'Grade 6', 'group' => 'middle_school', 'sort_order' => 6],
            ['slug' => 'grade7', 'name' => 'Grade 7', 'group' => 'middle_school', 'sort_order' => 7],
            ['slug' => 'grade8', 'name' => 'Grade 8', 'group' => 'middle_school', 'sort_order' => 8],
            ['slug' => 'grade9', 'name' => 'Grade 9', 'group' => 'middle_school', 'sort_order' => 9],
            ['slug' => 'grade10', 'name' => 'Grade 10', 'group' => 'high_school', 'sort_order' => 10],
            ['slug' => 'grade11', 'name' => 'Grade 11', 'group' => 'high_school', 'sort_order' => 11],
            ['slug' => 'grade12', 'name' => 'Grade 12 (Matriculation)', 'group' => 'high_school', 'sort_order' => 12],
        ];

        $classes = array_map(function (array $class) use ($groupIds, $now): array {
            $groupSlug = $class['group'];
            unset($class['group']);

            return [...$class, 'group_id' => $groupIds[$groupSlug], 'created_at' => $now, 'updated_at' => $now];
        }, $classes);

        DB::table('classes')->upsert(
            $classes,
            ['slug'],
            ['name', 'group_id', 'sort_order', 'updated_at'],
        );
    }
}
