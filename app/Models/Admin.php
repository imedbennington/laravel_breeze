<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Employee
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'position', 'salary', 'department',
    ];

    public function __construct($name, $email, $password, $position, $salary, $department)
    {
        parent::__construct($name, $email, $password, $position, $salary);
        $this->setDepartment($department);
    }


    // Additional getters and setters for Admin

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }
}
