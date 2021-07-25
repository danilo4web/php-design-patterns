<?php

namespace DesignPattern\BuilderPattern;

class Framework implements FrameworkInterface
{
    private string $name;
    private string $db;
    private string $dbUser;
    private string $dbPassword;
    private string $dbHost;
    private bool $testSuit;
    private bool $webPack;
    private bool $full;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @param string $db
     * @return void
     */
    public function setDb(string $db): void
    {
        $this->db = $db;
    }

    /**
     * @return string
     */
    public function getDbUser(): string
    {
        return $this->dbUser;
    }

    /**
     * @param string $dbUser
     * @return void
     */
    public function setDbUser(string $dbUser): void
    {
        $this->dbUser = $dbUser;
    }

    /**
     * @return string
     */
    public function getDbPassword(): string
    {
        return $this->dbPassword;
    }

    /**
     * @param string $dbPassword
     * @return void
     */
    public function setDbPassword(string $dbPassword): void
    {
        $this->dbPassword = $dbPassword;
    }

    /**
     * @return string
     */
    public function getDbHost(): string
    {
        return $this->dbHost;
    }

    /**
     * @param string $dbHost
     * @return void
     */
    public function setDbHost(string $dbHost): void
    {
        $this->dbHost = $dbHost;
    }

    /**
     * @return bool
     */
    public function isTestSuit(): bool
    {
        return $this->testSuit;
    }

    /**
     * @param bool $testSuit
     * @return void
     */
    public function setTestSuit(bool $testSuit): void
    {
        $this->testSuit = $testSuit;
    }

    /**
     * @return bool
     */
    public function isWebPack(): bool
    {
        return $this->webPack;
    }

    /**
     * @param bool $webPack
     * @return void
     */
    public function setWebPack(bool $webPack): void
    {
        $this->webPack = $webPack;
    }

    /**
     * @return bool
     */
    public function isFull(): bool
    {
        return $this->full;
    }

    /**
     * @param bool $full
     * @return void
     */
    public function setFull(bool $full): void
    {
        $this->full = $full;
    }

    public function run(): void
    {
        echo "criando o projeto";
    }
}
