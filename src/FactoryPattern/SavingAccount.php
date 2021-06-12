<?php

namespace DesignPattern\FactoryPattern;

use Exception;

/**
 * Class SavingAccount
 * @package DesignPattern\FactoryPattern
 */
class SavingAccount extends AccountAbstract implements SavingAccountInterface
{
    /**
     * @param float $value
     * @return float
     * @throws \Exception
     */
    public function draw(float $value): float
    {
        $balance = $this->getBalance();
        if ($value > $balance) {
            throw new Exception ("Balance isn't enough, you have only: $balance. Can't withdraw: " . $value);
        }

        $newBalance = $balance - $value;
        $this->setBalance($newBalance);
        return $this->balance;
    }
}