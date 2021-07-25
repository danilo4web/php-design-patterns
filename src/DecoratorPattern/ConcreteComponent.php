<?php

namespace DesignPattern\DecoratorPattern;

class ConcreteComponent implements ComponentInterface
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}