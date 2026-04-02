<?php

    require_once('./configuration/connect.php');

    class ClientModel extends Connect{
        private $table;

        function __construct()
        {
            parent::__construct(); 
            // abre o construtor da classe "parent" ou seja, extends Connect, abrindo uma conexão do banco de dados a partir do arquivo connect.php
            $this->table = 'clients';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }   
    }

?>