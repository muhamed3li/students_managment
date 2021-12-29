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
        \App\Models\User::factory(10)->create();
        \App\Models\Level::factory(10)->create();
        \App\Models\Time::factory(10)->create();
        for($i =1 ; $i <= 10 ; $i++)
        {
            \App\Models\Group::factory()->create();
        }
        \App\Models\Exam::factory(10)->create();
        \App\Models\Student::factory(10)->create();
        \App\Models\Note::factory(10)->create();
        \App\Models\Payment::factory(10)->create();
        \App\Models\Expence::factory(10)->create();
        \App\Models\Attendance::factory(10)->create();
        \App\Models\ExamAttindance::factory(10)->create();
    }
}
