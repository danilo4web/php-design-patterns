<?php

namespace DesignPattern;

use DesignPattern\StrategyPattern\StoreFile;
use Exception;

class StrategyPattern
{
    /**
     * @return void
     */
    public function storeFiles($storage): void
    {
        try {
            $file = '/home/danilo/remetentes.csv';

            $storage = new StoreFile($storage);
            $storage->store($file);

        } catch(Exception $exception) {
            echo $exception->getMessage();
        }
    }
}