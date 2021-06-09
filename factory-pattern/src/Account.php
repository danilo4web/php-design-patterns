<?php

namespace DesignPattern;

/**
 * Class CheckingAccount
 * @package DesignPattern
 */
abstract class Account implements AccountInterface
{
    /**
     * @var float
     */
    protected float $balance;

    /**
     * CheckingAccount constructor.
     */
    function __construct()
    {
        $this->balance = 0;
    }

    /**
     * @param float $value
     * @return float
     */
    public function deposit(float $value): float
    {
        $this->balance += $value;
        return $this->balance;
    }

    /**
     * @param float $value
     * @return float
     */
    abstract function draw(float $value): float;

    /**
     * @return float
     */
    public function balance(): float
    {
        return $this->balance;
    }
}