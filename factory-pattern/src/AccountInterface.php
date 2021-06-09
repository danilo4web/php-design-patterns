<?php

namespace DesignPattern;

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
     * @return mixed
     */
    public function draw(float $value): float;

    /**
     * @return float
     */
    function balance(): float;
}