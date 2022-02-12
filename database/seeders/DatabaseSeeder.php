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
        \App\Models\User::factory(100)->create();
        \App\Models\Level::factory(100)->create();
        \App\Models\Time::factory(100)->create();
        for($i =1 ; $i <= 100 ; $i++)
        {
            \App\Models\Group::factory()->create();
        }
        \App\Models\Exam::factory(100)->create();
        \App\Models\Student::factory(100)->create();
        \App\Models\Note::factory(100)->create();
        \App\Models\Payment::factory(100)->create();
        \App\Models\Expence::factory(100)->create();
        \App\Models\Attendance::factory(100)->create();
        \App\Models\ExamAttindance::factory(100)->create();
        \App\Models\Homework::factory(100)->create();
        \App\Models\HomeworkSolution::factory(100)->create();
    }
}
