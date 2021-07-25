<?php

namespace DesignPattern\BuilderPattern;

class FrameworkFullBuilder implements BuilderInterface
{
    private FrameworkInterface $framework;

    public function __construct(FrameworkInterface $framework)
    {
        $this->framework = $framework;
    }

    public function getFramework(): FrameworkInterface
    {
        return $this->framework;
    }

    public function buildName(): void
    {
        $this->framework->setName("My Project");
    }

    public function buildDb(): void
    {
        $this->framework->setDb("MyDb");
        $this->framework->setDbHost("MyDbHost");
        $this->framework->setDbUser("MyUser");
        $this->framework->setPassword("MyPassword");
    }

    public function buildWebPack(): void
    {
        $this->framework->setWebPack(true);
    }

    public function buildTest(): void
    {
        $this->framework->setTestSuit(true);
    }
}
