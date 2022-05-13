<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(CoursesTagsSeeder::class);
        $this->call(DocumentSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(TeacherCoursesSeeder::class);
        $this->call(UserCoursesSeeder::class);
        $this->call(UserLessonSeeder::class);
    }
}
