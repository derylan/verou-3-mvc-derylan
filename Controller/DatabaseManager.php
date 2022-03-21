<?php

class DatabaseManager
{
    private string $host;
    private string $user;
    private string $password;
    private string $dbname;
    public PDO $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connect(): void
    {
        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo "Database is connected";
    }
}