<?php

class Database 
{
    private $host = 'localhost';
    private $db = 'carros';
    private $username = 'root';
    private $password = '';

    public function connect()
    {
        try 
        {
            $conn = new PDO
            (
                "mysql:host={$this->host};dbname={$this->db}",
                $this->username,
                $this->password
            );
            return $conn;
        } catch (PDOException $e)
        {
            echo "Erro " . $e->getMessage();
        }
    }

}

?>