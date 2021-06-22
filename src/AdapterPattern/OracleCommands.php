<?php

declare(strict_types=1);

namespace DesignPattern\AdapterPattern;

class OracleCommands
{
    public function insertOracle(): int
    {
        return 10;
    }

    public function updateOracle(): bool
    {
        return true;
    }

    public function deleteOracle(): bool
    {
        return true;
    }
}
