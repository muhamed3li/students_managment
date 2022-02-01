<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function level()
    {
        return $this->belongsTo(Level::class ,'level_id');
    }


    public function time()
    {
        return $this->belongsTo(Time::class ,'time_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class,'group_id');
    }
}
