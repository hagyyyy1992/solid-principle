<?php
declare(strict_types=1);

namespace myapp\dip\good;

use myapp\dip\good\Controller\EmployeeController;
use myapp\dip\good\Repository\EmployeeRepository;
use myapp\dip\good\Service\EmployeeService;

require_once "../../../vendor/autoload.php";

$employeeController = new EmployeeController(new EmployeeService(new EmployeeRepository()));
echo $employeeController->fetchEmployeeName(1) . "\n";
echo $employeeController->fetchEmployeeSalary(1) . "\n";
