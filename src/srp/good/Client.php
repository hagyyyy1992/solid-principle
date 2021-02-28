<?php
declare(strict_types=1);

namespace myapp\srp\good;

require_once "../../../vendor/autoload.php";

$client = new EmployeeFacade();
$client->saveEmployee();
$client->reportHours();
$client->calculatePay();
