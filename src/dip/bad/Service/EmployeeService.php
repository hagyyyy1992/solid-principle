<?php
declare(strict_types=1);

namespace myapp\dip\bad\Service;

use myapp\dip\bad\Repository\EmployeeRepository;

/**
 * Class EmployeeService
 *
 * @package myapp\solid\dip\bad\Service
 */
class EmployeeService
{
    /**
     * @var EmployeeRepository
     */
    private $repository;

    /**
     * EmployeeService constructor.
     *
     * @param EmployeeRepository $repository
     */
    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param  int $employeeId
     * @return string
     */
    public function fetchEmployeeSalary(int $employeeId): string
    {
        return $this->repository->fetchEmployeeNameById($employeeId)['name'];
    }
}
