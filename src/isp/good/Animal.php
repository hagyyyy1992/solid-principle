<?php
declare(strict_types=1);

namespace myapp\isp\good;

/**
 * Interface Animal
 *
 * @package myapp\solid\isp\good
 */
interface Animal extends Walkable, Flyable
{
    public function cry(): void;
}
