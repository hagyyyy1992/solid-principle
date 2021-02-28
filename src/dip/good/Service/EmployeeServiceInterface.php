<?php
declare(strict_types=1);

namespace myapp\dip\good\Service;

/**
 * Interface EmployeeServiceInterface
 *
 * @package myapp\solid\dip\good
 */
interface EmployeeServiceInterface
{
    /**
     * @param  int $employeeId
     * @return array
     */
    public function fetchEmployeeById(int $employeeId): array;
}
