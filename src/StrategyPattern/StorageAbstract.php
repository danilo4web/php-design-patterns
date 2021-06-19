<?php

namespace DesignPattern\StrategyPattern;

/**
 * Class StorageAbstract
 * @package DesignPattern\StrategyPattern
 */
abstract class StorageAbstract
{
    /**
     * @param string $file
     * @return bool
     */
    abstract protected function store(string $file): boolean;
}
