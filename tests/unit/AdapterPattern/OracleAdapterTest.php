<?php

namespace unit\AdapterPattern;

use DesignPattern\AdapterPattern\OracleAdapter;
use DesignPattern\AdapterPattern\OracleCommands;
use PHPUnit\Framework\TestCase;

class OracleAdapterTest extends TestCase
{
    private OracleAdapter $oracleAdapter;
    private OracleCommands $oracleCommands;

    public function setUp(): void
    {
        $this->oracleCommands = $this->getMockBuilder(OracleCommands::class)->getMock();
        $this->oracleAdapter = new OracleAdapter($this->oracleCommands);
    }

    public function testInsert(): void
    {
        $this->oracleCommands->method('insertOracle')->willReturn(10);
        $result = $this->oracleAdapter->insert();
        $this->assertIsInt($result);
    }

    public function testUpdate(): void
    {
        $this->oracleCommands->method('updateOracle')->willReturn(true);
        $result = $this->oracleAdapter->update();
        $this->assertTrue($result);
    }

    public function testDelete(): void
    {
        $this->oracleCommands->method('deleteOracle')->willReturn(true);
        $result = $this->oracleAdapter->delete();
        $this->assertTrue($result);
    }
}
