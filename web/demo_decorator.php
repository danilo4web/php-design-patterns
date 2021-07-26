<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\DecoratorPattern\ComponentInterface;
use DesignPattern\DecoratorPattern\ConcreteComponent;
use DesignPattern\DecoratorPattern\ConcreteDecoratorA;
use DesignPattern\DecoratorPattern\ConcreteDecoratorB;

/**
 * The client code works with all objects using the Component interface. This
 * way it can stay independent of the concrete classes of components it works
 * with.
 */
function clientCode(ComponentInterface $component)
{
    // ...
    echo "RESULT: " . $component->operation();
    // ...
}

/**
 * This way the client code can support both simple components...
 */
$simple = new ConcreteComponent();
echo "Client: I've got a simple component:\n";
clientCode($simple);
echo "\n\n";

/**
 * ...as well as decorated ones.
 *
 * Note how decorators can wrap not only simple components but the other
 * decorators as well.
 */
$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
echo "Client: Now I've got a decorated component:\n";
clientCode($decorator2);