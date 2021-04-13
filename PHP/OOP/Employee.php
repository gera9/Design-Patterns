<?php

namespace employee_1;

class Employee {
    public function __construct()
    {
        echo 'From Employee.php';
    }
}

$employee = new Employee();