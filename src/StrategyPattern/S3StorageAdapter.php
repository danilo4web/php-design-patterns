<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

class S3StorageAdapter implements StorageInterface
{
    private string $key;
    private string $secret;
    private string $bucket;

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }


    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    public function getBucket(): string
    {
        return $this->bucket;
    }

    public function setBucket(string $bucket): void
    {
        $this->bucket = $bucket;
    }

    public function store(string $file): bool
    {
        return true;
    }
}
