<?php

namespace Tests\Feature;

use Database\Seeders\ClassSeeder;
use Database\Seeders\SubjectSeeder;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TeacherProfileSubmitPageTest extends TestCase
{
    public function test_teacher_profile_submit_page_displays_database_lookup_data(): void
    {
        $this->seed([SubjectSeeder::class, ClassSeeder::class]);

        $city = DB::table('cities')->first();
        $township = DB::table('townships')->first();
        $subject = DB::table('subjects')->first();
        $class = DB::table('classes')->first();

        $response = $this->get('/teacher/profile/submit');

        $response->assertOk();
        $response->assertSee($city->name);
        $response->assertSee($township->name);
        $response->assertSee($subject->name);
        $response->assertSee($class->name);
    }
}
