<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'course', 'year',
    ];

    public function __construct($name, $email, $password, $course, $year)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setCourse($course);
        $this->setYear($year);
    }

    // Additional getters and setters for Student

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

     // A student follows many courses
     public function courses()
     {
         return $this->belongsToMany(Course::class);
     }
}
