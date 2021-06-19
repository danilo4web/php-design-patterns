<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

class FileSystemStorage extends StorageAbstract
{
    /**
     * @param string $file
     * @return bool
     */
    public function store(string $file): boolean
    {
        exit("store {$file} on FileSystem");
    }
}
