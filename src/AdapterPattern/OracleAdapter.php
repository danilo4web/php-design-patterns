<?php

declare(strict_types=1);

namespace DesignPattern\AdapterPattern;

class OracleAdapter implements DbAdapterInterface
{
    private OracleCommands $oracle;

    public function __construct(OracleCommands $oracle)
    {
        $this->oracle = $oracle;
    }

    public function insert(): int
    {
        return $this->oracle->insertOracle();
    }

    public function update(): bool
    {
        return $this->oracle->updateOracle();
    }

    public function delete(): bool
    {
        return $this->oracle->deleteOracle();
    }
}
