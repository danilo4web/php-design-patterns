<?php

namespace DesignPattern\FactoryPattern;

use Exception;

/**
 * Class CheckingAccount
 * @package DesignPattern
 */
class CheckingAccount extends Account
{
    protected float $limit = 0;

    /**
     * @param float $limit
     * @throws \Exception
     */
    public function setLimit(float $limit): void
    {
        if ($this->limit != 0) {
            throw new Exception('Limit already defined');
        }

        $this->limit = $limit;
        self::defineBalanceWithLimit();
    }

    /**
     * @return float
     */
    public function getLimit(): float
    {
        return $this->limit;
    }

    /**
     * @return void
     */
    private function defineBalanceWithLimit(): void
    {
        $this->balance += $this->getLimit();
    }
}
