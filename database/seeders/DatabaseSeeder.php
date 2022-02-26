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
        \App\Models\User::factory()->count(1000)->create();
        \App\Models\Level::factory(100)->count(100)->create();
        \App\Models\Time::factory()->count(1000)->create();
        // for($i =1 ; $i <= 1000 ; $i++)
        // {
            \App\Models\Group::factory()->count(100)->create();
        // }
        \App\Models\Exam::factory()->count(1000)->create();
        \App\Models\Student::factory()->count(1000)->create();
        \App\Models\Note::factory()->count(1000)->create();
        \App\Models\Expence::factory()->count(1000)->create();
        \App\Models\Attendance::factory()->count(1000)->create();
        \App\Models\ExamAttindance::factory()->count(1000)->create();
        \App\Models\Homework::factory()->count(1000)->create();
        \App\Models\HomeworkSolution::factory()->count(1000)->create();
        \App\Models\Month::factory()->count(10)->create();
        \App\Models\Payment::factory()->count(1000)->create();
    }
}
