<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function groups()
    {
        return $this->hasMany(Group::class,'level_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class,'level_id');
    }
}
