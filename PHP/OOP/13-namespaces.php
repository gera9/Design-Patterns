<?php include 'includes/header.php';

require_once 'Employee.php';

echo "<br>";

class Employee {
    public function __construct()
    {
        echo 'From 13-namespaces.php';
    }
}

$employee = new Employee();