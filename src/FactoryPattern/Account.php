<?php

namespace DesignPattern\FactoryPattern;

use Exception;

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
     * Account constructor.
     */
    function __construct()
    {
        $this->balance = 0;
    }

    /**
     * @param float $value
     * @return float
     */
    function deposit(float $value): float
    {
        $this->balance += $value;
        return $this->balance;
    }

    /**
     * @return float
     */
    function balance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $value
     * @return float
     * @throws \Exception
     */
    function draw(float $value): float
    {
        if ($value > $this->balance) {
            throw new Exception ("Your balance isn't enough, you have only: $this->balance. Can't withdraw: " . $value);
        }

        $this->balance -= $value;
        return $this->balance;
    }
}
