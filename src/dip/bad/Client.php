<?php
declare(strict_types=1);

namespace myapp\dip\bad;

use myapp\dip\bad\Controller\EmployeeController;
use myapp\dip\bad\Repository\EmployeeRepository;
use myapp\dip\bad\Service\EmployeeService;

require_once "../../../vendor/autoload.php";

echo (new EmployeeController(new EmployeeService(new EmployeeRepository())))->pay(1) . "\n";
