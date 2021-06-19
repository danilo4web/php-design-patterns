<?php

declare(strict_types=1);

namespace DesignPattern;

use DesignPattern\FactoryPattern\{AccountFactory, CheckingAccountInterface, SavingAccountInterface};
use Exception;

class FactoryPattern
{
    /**
     * @return void
     */
    public function show(): void
    {
        try {
            $this->demostrateCheckingAccount();
        } catch (Exception $e) {
            error_log($e->getMessage());
        }

        echo "============================================" . PHP_EOL . PHP_EOL;

        try {
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
        echo "<h1> Checking Account </h1>" . PHP_EOL . PHP_EOL;

        /** @var CheckingAccountInterface $myCheckingAccount */
        $myCheckingAccount = AccountFactory::create("Checking");

        $limite = 100;
        echo "Limite: $limite" . PHP_EOL . PHP_EOL;
        $myCheckingAccount->setLimit($limite);

        $valorDepositar = 100;
        $saldo = $myCheckingAccount->deposit($valorDepositar);
        echo "Depositei $valorDepositar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 190;
        $saldo = $myCheckingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 20;
        $saldo = $myCheckingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;
    }

    /**
     * @throws \Exception
     */
    private function demostrateSavingAccount(): void
    {
        echo "<h1> Saving Account </h1>" . PHP_EOL . PHP_EOL;

        /** @var SavingAccountInterface $mySavingAccount */
        $mySavingAccount = AccountFactory::create("Saving");

        $valorDepositar = 100;
        $saldo = $mySavingAccount->deposit($valorDepositar);
        echo "Depositei $valorDepositar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 90;
        $saldo = $mySavingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;

        $valorSacar = 20;
        $saldo = $mySavingAccount->draw($valorSacar);
        echo "Saquei $valorSacar" . PHP_EOL;
        echo "Meu saldo é: " . $saldo . PHP_EOL . PHP_EOL;
    }
}
