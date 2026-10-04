<?php

class Employee {
    private $name;
    private $position;
    private $salary;

    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Position: " . $this->position . "<br>";
        echo "Salary: " . $this->salary . "<br>";
        echo "====================";
    }
}

echo "<h1> Employe in Sari Sari Store</h1>";
$employee1 = new Employee("rey", "lacia", 7500);
$employee2 = new Employee("Nene", "Tindera",9000 );


echo "Employee 1:<br>";
$employee1->displayInfo();
echo "<br>Employee 2:<br>";
$employee2->displayInfo();

?>
