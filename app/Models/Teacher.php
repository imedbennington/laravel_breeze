<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Employee
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'position', 'salary', 'subject',
    ];

    public function __construct($name, $email, $password, $position, $salary, $subject)
    {
        parent::__construct($name, $email, $password, $position, $salary);
        $this->setSubject($subject);
    }

    // Additional getters and setters for Teacher

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    // A teacher has many courses
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
