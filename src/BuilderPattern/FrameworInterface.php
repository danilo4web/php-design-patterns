<?php

namespace DesignPattern\BuilderPattern;

interface FrameworkInterface
{
    public function getName(): string;

    public function setName(string $name): void;

    public function getDb(): string;

    public function setDb(string $db): void;

    public function getDbUser(): string;

    public function setDbUser(string $dbUser): void;

    public function getDbPassword(): string;

    public function setDbPassword(string $dbPassword): void;

    public function getDbHost(): string;

    public function setDbHost(string $dbHost): void;

    public function isTestSuit(): bool;

    public function setTestSuit(bool $testSuit): void;

    public function isWebPack(): bool;

    public function setWebPack(bool $webPack): void;

    public function isFull(): bool;

    public function setFull(bool $full): void;

    public function run(): void;
}
