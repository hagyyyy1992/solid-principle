<?php
declare(strict_types=1);

namespace myapp\lsp\good;

/**
 * 多角形
 * Class Polygon
 *
 * @package myapp\solid\lsp\good
 */
interface Polygon
{
    /**
     * 面積
     *
     * @return int
     */
    public function area(): int;
}
