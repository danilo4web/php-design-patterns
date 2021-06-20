<?php

namespace DesignPattern\AdapterPattern;

interface StorageInterface
{
    public function store(string $file): bool;
}
