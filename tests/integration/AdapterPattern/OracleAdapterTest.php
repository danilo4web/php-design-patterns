<?php

namespace integration\AdapterPattern;

use DesignPattern\AdapterPattern\OracleAdapter;
use DesignPattern\AdapterPattern\OracleCommands;
use PHPUnit\Framework\TestCase;

class OracleAdapterTest extends TestCase
{
    private OracleCommands $oracleCommands;
    private OracleAdapter $oracleAdapter;

    public function setUp(): void
    {
        $this->oracleCommands = new OracleCommands();
        $this->oracleAdapter = new OracleAdapter($this->oracleCommands);
    }

    public function testInsert(): void
    {
        $result = $this->oracleAdapter->insert();
        $this->assertIsInt($result);
    }

    public function testUpdate(): void
    {
        $result = $this->oracleAdapter->update();
        $this->assertTrue($result);
    }

    public function testDelete(): void
    {
        $result = $this->oracleAdapter->delete();
        $this->assertTrue($result);
    }

}
