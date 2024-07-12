<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends User
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'position', 'salary',
    ];

    public function __construct($name, $email, $password, $position, $salary)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setPosition($position);
        $this->setSalary($salary);
    }

    // Additional getters and setters for Employee

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
