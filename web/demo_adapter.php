<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\AdapterPattern\MySQLAdapter;
use DesignPattern\AdapterPattern\MySQLCommands;

try {
    $mysql = new MySQLAdapter(new MySQLCommands());
    $result = $mysql->insert();

    echo $result;
} catch (Exception $e) {
    error_log($e->getMessage());
}
