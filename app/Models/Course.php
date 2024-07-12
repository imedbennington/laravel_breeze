<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'teacher_id',
    ];

    // A course belongs to one teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // A course has many students
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
