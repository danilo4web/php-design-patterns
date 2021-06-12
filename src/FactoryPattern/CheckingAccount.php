<?php

namespace DesignPattern\FactoryPattern;

use Exception;

/**
 * Class CheckingAccount
 * @package DesignPattern\FactoryPattern
 */
class CheckingAccount extends AccountAbstract implements CheckingAccountInterface
{
    private float $limit = 0;

    /**
     * @inheritDoc
     */
    public function setLimit(float $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @inheritDoc
     */
    public function getLimit(): float
    {
        return $this->limit;
    }

    /**
     * @param float $value
     * @return float
     * @throws \Exception
     */
    public function draw(float $value): float
    {
        $balance = $this->getBalance();
        $limit = $this->getLimit();
        $balanceWithLimit = $balance + $limit;

        if ($value > $balanceWithLimit) {
            throw new Exception(
                "Request was denied!" . PHP_EOL .
                "Your balance is: $balance" . PHP_EOL .
                "Your limit is: $limit" . PHP_EOL .
                "Can't withdraw: " . $value
            );
        }

        $newBalance = $balance - $value;
        $this->setBalance($newBalance);

        return $this->getBalance();
    }
}
