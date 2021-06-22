<?php

declare(strict_types=1);

namespace DesignPattern\AdapterPattern;

class MySQLCommands
{
    public function insertMysql(): int
    {
        return 20;
    }

    public function updateMysql(): bool
    {
        return true;
    }

    public function deleteMysql(): bool
    {
        return true;
    }
}
