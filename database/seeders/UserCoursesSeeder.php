<?php

namespace Database\Seeders;

use App\Models\UserCourses;
use Illuminate\Database\Seeder;


class UserCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserCourses::factory()->count(100)->create();
    }
}
