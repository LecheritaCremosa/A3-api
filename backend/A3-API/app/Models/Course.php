<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'course';
    protected $fillable = ['code','shift', 'career_id', 'initial_date', 'final_date', 'status' ];

    public function carrer()
    {
        return $this->belongsTo(Career::class);
    }
    public function scheduling_environment()
    {
        return $this->belongsTo(SchedulingEnvironment::class);
    }
    public function career()
    {
        return $this->belongsTo(Career::class);
    }

}






