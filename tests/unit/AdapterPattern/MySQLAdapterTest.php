<?php

namespace unit\AdapterPattern;

use DesignPattern\AdapterPattern\MySQLAdapter;
use DesignPattern\AdapterPattern\MySQLCommands;
use PHPUnit\Framework\TestCase;

class MySQLAdapterTest extends TestCase
{
    private MySQLAdapter $mySQLAdapter;
    private MySQLCommands $mySQLCommands;

    public function setUp(): void
    {
        $this->mySQLCommands = $this->getMockBuilder(MySQLCommands::class)->getMock();
        $this->mySQLAdapter = new MySQLAdapter($this->mySQLCommands);
    }

    public function testInsert(): void
    {
        $this->mySQLCommands->method('insertMySQL')->willReturn(10);
        $result = $this->mySQLAdapter->insert();
        $this->assertIsInt($result);
    }

    public function testUpdate(): void
    {
        $this->mySQLCommands->method('updateMySQL')->willReturn(true);
        $result = $this->mySQLAdapter->update();
        $this->assertTrue($result);
    }

    public function testDelete(): void
    {
        $this->mySQLCommands->method('deleteMySQL')->willReturn(true);
        $result = $this->mySQLAdapter->delete();
        $this->assertTrue($result);
    }
}
