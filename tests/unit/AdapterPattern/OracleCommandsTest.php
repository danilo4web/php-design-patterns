<?php

namespace unit\AdapterPattern;

use DesignPattern\AdapterPattern\OracleCommands;
use PHPUnit\Framework\TestCase;

class OracleCommandsTest extends TestCase
{
    private OracleCommands $oracleCommands;

    public function setUp(): void
    {
        $this->oracleCommands = new OracleCommands();
    }

    public function testInsertOracle(): void
    {
        $result = $this->oracleCommands->insertOracle();
        $this->assertIsInt($result);
    }

    public function testUpdateOracle(): void
    {
        $result = $this->oracleCommands->updateOracle();
        $this->assertTrue($result);
    }

    public function testDeleteOracle(): void
    {
        $result = $this->oracleCommands->deleteOracle();
        $this->assertTrue($result);
    }
}
