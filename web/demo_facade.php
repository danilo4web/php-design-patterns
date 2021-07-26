<?php

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\FacadePattern\YouTubeDownloader;

/**
 * The client code does not depend on any subsystem's classes. Any changes
 * inside the subsystem's code won't affect the client code. You will only need
 * to update the Facade.
 */
function clientCode(YouTubeDownloader $facade)
{
    // ...

    $facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");

    // ...
}

$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
clientCode($facade);
