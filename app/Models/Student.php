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
        $this->payments()->updateOrCreate(['student_id' => $this->id,'pay_from'=>$data->pay_from,'pay_to' => $data->pay_to],[
            'month_paid' => $data->month_paid,
            'malazem_paid' => $data->malazem_paid,
            'discount' => $data->discount ?? 0,
            'total' => $data->month_paid + $data->malazem_paid - $data->discount,
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
            'degree' => $degree
        ]);
    }
}
