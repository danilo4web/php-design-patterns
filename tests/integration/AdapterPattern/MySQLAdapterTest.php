<?php

namespace integration\AdapterPattern;

use DesignPattern\AdapterPattern\MySQLAdapter;
use DesignPattern\AdapterPattern\MySQLCommands;
use PHPUnit\Framework\TestCase;

class MySQLAdapterTest extends TestCase
{
    private MySQLCommands $mySQLCommands;
    private MySQLAdapter $mySQLAdapter;

    public function setUp(): void
    {
        $this->mySQLCommands = new MySQLCommands();
        $this->mySQLAdapter = new MySQLAdapter($this->mySQLCommands);
    }

    public function testInsert(): void
    {
        $result = $this->mySQLAdapter->insert();
        $this->assertIsInt($result);
    }

    public function testUpdate(): void
    {
        $result = $this->mySQLAdapter->update();
        $this->assertTrue($result);
    }

    public function testDelete(): void
    {
        $result = $this->mySQLAdapter->delete();
        $this->assertTrue($result);
    }
}
