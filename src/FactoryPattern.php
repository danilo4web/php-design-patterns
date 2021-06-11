<?php

namespace DesignPattern;

use DesignPattern\FactoryPattern\AccountFactory;
use DesignPattern\FactoryPattern\AccountInterface;
use Exception;

class FactoryPattern
{
    /**
     * @return void
     */
    public function show(): void
    {
        try {
            echo "<h1> Checking Account </h1>";
            $this->demostrateCheckingAccount();
        } catch (Exception $e) {
            error_log($e->getMessage());
        }

        echo "============================================" . PHP_EOL . PHP_EOL;
        echo "<h1> Saving Account </h1>";

        try {
            echo "<h1> Checking Account </h1>";
            $this->demostrateSavingAccount();
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    /**
     * @throws \Exception
     */
    private function demostrateCheckingAccount(): void
    {
        /** @var AccountInterface $myCheckingAccount */
        $myCheckingAccount = AccountFactory::create("Checking");

        $limite = 100;
        echo "Meu limite é $limite" . PHP_EOL . PHP_EOL;
        $myCheckingAccount->setLimit($limite);

        $valorDepositar = 10;
        $saldo = $myCheckingAccount->deposit($valorDepositar);
        echo "Depositei $valorDepositar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 4.5;
        $saldo = $myCheckingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 200;
        $saldo = $myCheckingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;
    }

    /**
     * @throws \Exception
     */
    private function demostrateSavingAccount(): void
    {
        /** @var AccountInterface $mySavingAccount */
        $mySavingAccount = AccountFactory::create("Saving");

        $valorDepositar = 10;
        $saldo = $mySavingAccount->deposit($valorDepositar);
        echo "Depositei $valorDepositar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 4.5;
        $saldo = $mySavingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 200;
        $saldo = $mySavingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;
    }
}