<?php

namespace Database\Seeders;

use App\Models\CoursesTags;
use Illuminate\Database\Seeder;

class CoursesTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CoursesTags::factory()->count(100)->create();
    }
}
