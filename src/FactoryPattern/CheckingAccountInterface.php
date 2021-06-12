<?php

namespace DesignPattern\FactoryPattern;

/**
 * Interface CheckingAccountInterface
 * @package DesignPattern\FactoryPattern
 */
interface CheckingAccountInterface
{
    /**
     * @param float $limit
     * @return void
     */
    public function setLimit(float $limit): void;

    /**
     * @return float
     */
    public function getLimit(): float;
}
