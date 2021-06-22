<?php

declare(strict_types=1);

namespace DesignPattern\AdapterPattern;

interface DbAdapterInterface
{
    public function insert(): int;

    public function update(): bool;

    public function delete(): bool;
}
