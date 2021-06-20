<?php

namespace DesignPattern\StrategyPattern;

interface StorageInterface
{
    public function store(string $file): bool;
}
