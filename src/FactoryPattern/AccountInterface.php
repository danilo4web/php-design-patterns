<?php

namespace DesignPattern\FactoryPattern;

/**
 * Interface AccountInterface
 * @package DesignPattern
 */
interface AccountInterface
{
    /**
     * @param float $value
     * @return float
     */
    function deposit(float $value): float;

    /**
     * @param float $value
     * @return float
     */
    function draw(float $value): float;

    /**
     * @return float
     */
    function balance(): float;
}
