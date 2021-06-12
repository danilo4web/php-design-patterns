<?php

namespace DesignPattern\FactoryPattern;

use Exception;

/**
 * Class AccountAbstract
 * @package DesignPattern\FactoryPattern
 */
abstract class AccountAbstract
{
    /**
     * @var float
     */
    protected float $balance;

    /**
     * AccountAbstract constructor.
     */
    public function __construct()
    {
        $this->setBalance(0);
    }

    /**
     * @param float $value
     * @return float
     */
    public function deposit(float $value): float
    {
        $balance = $this->getBalance();
        $newBalance = $balance + $value;
        $this->setBalance($newBalance);

        return $this->getBalance();
    }

    /**
     * @param float $balance
     * @return void
     */
    protected function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @return float
     */
    protected function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $value
     * @return float
     * @throws Exception
     */
    abstract protected function draw(float $value): float;
}
