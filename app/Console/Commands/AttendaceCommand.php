<?php

namespace App\Console\Commands;

use App\Models\Group;
use DateTime;
use Illuminate\Console\Command;

class AttendaceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student:unattend';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Attendance of students';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $groups = Group::get();
        foreach($groups as $group)
        {
            $today = date('l', strtotime(today()));
            
            if($today == "Friday")
            {
                $this->handleUnattend($group,'fri');                
            }
            else if($today == "Saturday")
            {
                $this->handleUnattend($group,'sat');
            }
            else if($today == "Sunday")
            {
                $this->handleUnattend($group,'sun');
            }
            else if($today == "Monday")
            {
                $this->handleUnattend($group,'mon');
            }
            else if($today == "Tuesday")
            {
                $this->handleUnattend($group,'tus');
            }
            else if($today == "Wednesday")
            {
                $this->handleUnattend($group,'wed');
            }
            else if($today == "Thursday")
            {
                $this->handleUnattend($group,'thu');
            }
            
        }
    }

    // $fri = DateTime::createFromFormat("H:i:s",$group->time->fri);
    //             $now = now();
    //             $difference = $fri->diff($now)->h;
    //             if($now > $fri && $difference >= 1)
    //             {
    //                 foreach($group->students as $student)
    //                 {
    //                     if( !$student->didAttendIn(today()))
    //                     {
    //                         $student->unAttendIn(today());
    //                     }
    //                 }
    //             }

    public function handleUnattend($group,$day)
    {
        $$day = DateTime::createFromFormat("H:i:s",$group->time->$day);
        $now = now();
        $difference = $$day->diff($now)->h;
        if($now > $$day && $difference >= 1)
        {
            foreach($group->students as $student)
            {
                if( !$student->didAttendIn(today()))
                {
                    $student->unAttendIn(today());
                }
            }
        }
    }
}
