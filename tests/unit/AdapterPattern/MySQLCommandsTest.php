<?php

namespace unit\AdapterPattern;

use DesignPattern\AdapterPattern\MySQLCommands;
use PHPUnit\Framework\TestCase;

class MySQLCommandsTest extends TestCase
{
    private MySQLCommands $mySQLCommands;

    public function setUp(): void
    {
        $this->mySQLCommands = new MySQLCommands();
    }

    public function testInsertMysql(): void
    {
        $result = $this->mySQLCommands->insertMysql();
        $this->assertIsInt($result);
    }

    public function testUpdateMysql(): void
    {
        $result = $this->mySQLCommands->updateMysql();
        $this->assertTrue($result);
    }

    public function testDeleteMysql(): void
    {
        $result = $this->mySQLCommands->deleteMysql();
        $this->assertTrue($result);
    }
}
