<?php

require_once '../config/database.php';
require_once '../model/Carro.php';

class CarroModel
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function salvar(Carro $carro)
    {
        $sql = "INSERT INTO carros (modelo, cor) VALUES (:modelo, :cor)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(':modelo', $carro->getModelo());
        $stmt->bindValue(':cor', $carro->getCor());

        return $stmt->execute();
    }

    public function listar()
    {
        $conn = $this->conn;
        $stmt = $conn->prepare("SELECT * FROM carros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
