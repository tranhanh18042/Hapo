<?php

namespace Database\Seeders;

use App\Models\TeacherCourses;
use Illuminate\Database\Seeder;

class TeacherCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherCourses::factory()->count(100)->create();
    }
}
