<?php

namespace DesignPattern\FactoryPattern;

use Exception;

/**
 * Class AccountFactory
 * @package DesignPattern\FactoryPattern
 */
class AccountFactory
{
    /**
     * @param string $type
     * @return mixed
     * @throws Exception
     */
    public static function create(string $type)
    {
        $className = __NAMESPACE__ . '\\' . $type . 'Account';

        if (!class_exists($className)) {
            throw new Exception("$className does not exist");
        }

        return (new $className());
    }
}
