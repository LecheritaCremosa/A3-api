<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Career extends Model

{
    use HasFactory;

    protected $table = 'career';
    protected $fillable = [
        'name', 'type'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'career_id');
    }

    public function careers()
    {
        return $this->hasMany(Career::class);
    }
}
