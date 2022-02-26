<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class ,'group_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class ,'level_id');
    }

    public function attend()
    {
        return $this->hasMany(Attendance::class,'student_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class,'student_id');
    }

    public function attendexam()
    {
        return $this->hasMany(ExamAttindance::class,'student_id');
    }

    public function homeworkSolutions()
    {
        return $this->hasMany(HomeworkSolution::class,'student_id');
    }

    public function attendIn($date)
    {
        $this->attend()->updateOrCreate(['student_id' => $this->id,'day' => $date],[
            'attend' => true,
        ]);
    }

    public function unAttendIn($date)
    {
        $this->attend()->updateOrCreate(['student_id' => $this->id,'day' => $date],[
            'attend' => false,
        ]);
    }

    public function payIn($data)
    {
        $this->payments()->updateOrCreate(['student_id' => $this->id,'month_id'=>$data['month_id']],[
            'month_paid' => $data['month_paid'] ?? 0,
            'malazem_paid' => $data['malazem_paid'] ?? 0,
            'discount' => $data['discount'] ?? 0,
            'total' => $data['month_paid'] + $data['malazem_paid'] - $data['discount'],
        ]);
    }

    public function didAttendIn($date)
    {
        return $this->attend()->where([['attend',true],['day',$date]])->exists();
    }

    public function attendInExam($exam_id,$degree)
    {
        $this->attendexam()->updateOrCreate([
            'student_id' => $this->id,
            'exam_id' => $exam_id
        ],[
            'degree' => $degree ?? null
        ]);
    }


    public function solveHomework($homework_id,$degree,$solved_at)
    {
        $this->homeworkSolutions()->updateOrCreate([
            'student_id' => $this->id,
            'homework_id' => $homework_id
        ],[
            'degree' => $degree,
            'solved_at' => $solved_at
        ]);
    }

    public function getExamAttendance($exam_id)
    {
        return $this->attendexam()->where('exam_id',$exam_id)->first();
    }


    public function getHomeworkSolution($homework_id)
    {
        return $this->homeworkSolutions()->where('homework_id',$homework_id)->first();
    }

    public function didPayIn($pay_from,$pay_to)
    {
        return $this->payments()->where([
            ['pay_from' => $pay_from],
            ['pay_to' => $pay_to]
        ])->first();
    }
}
