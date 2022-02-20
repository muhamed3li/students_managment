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
        \App\Models\User::factory(1000)->create();
        \App\Models\Level::factory(100)->create();
        \App\Models\Time::factory(1000)->create();
        // for($i =1 ; $i <= 1000 ; $i++)
        // {
            \App\Models\Group::factory(100)->create();
        // }
        \App\Models\Exam::factory(1000)->create();
        \App\Models\Student::factory(1000)->create();
        \App\Models\Note::factory(1000)->create();
        \App\Models\Payment::factory(1000)->create();
        \App\Models\Expence::factory(1000)->create();
        \App\Models\Attendance::factory(1000)->create();
        \App\Models\ExamAttindance::factory(1000)->create();
        \App\Models\Homework::factory(1000)->create();
        \App\Models\HomeworkSolution::factory(1000)->create();
    }
}
