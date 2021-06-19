<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

use Exception;

/**
 * Class StorageFactory
 * @package DesignPattern\StrategyPattern
 */
abstract class StorageFactory
{
    /**
     * @param $storeType
     * @return mixed
     * @throws \Exception
     */
    public function build($storeType)
    {
        $className = __NAMESPACE__ . '\\' . $storeType . 'Storage';
        if (!class_exists($className)) {
            throw new Exception("$className does not exist");
        }

        return (new $className());
    }
}
