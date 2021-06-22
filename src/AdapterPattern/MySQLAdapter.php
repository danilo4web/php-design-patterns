<?php

declare(strict_types=1);

namespace DesignPattern\AdapterPattern;

class MySQLAdapter implements DbAdapterInterface
{
    private MySQLCommands $mysql;

    public function __construct(MySQLCommands $mysql)
    {
        $this->mysql = $mysql;
    }

    public function insert(): int
    {
        return $this->mysql->insertMysql();
    }

    public function update(): bool
    {
        return $this->mysql->updateMysql();
    }

    public function delete(): bool
    {
        return $this->mysql->deleteMysql();
    }
}
