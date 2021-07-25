<?php


namespace DesignPattern\DecoratorPattern;


class Decorator implements ComponentInterface
{
    /**
     * @var ComponentInterface
     */
    protected ComponentInterface $component;

    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    /**
     * The Decorator delegates all work to the wrapped component.
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}