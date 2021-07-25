<?php

namespace DesignPattern\BuilderPattern;

interface BuilderInterface
{
    public function getFramework(): FrameworkInterface;

    public function buildName(): void;

    public function buildDb(): void;

    public function buildWebPack(): void;

    public function buildTest(): void;
}
