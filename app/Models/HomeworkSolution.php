<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeworkSolution extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function homework()
    {
        return $this->belongsTo(Homework::class,'homework_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
