<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAttindance extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class ,'student_id');
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class ,'exam_id');
    }
}
