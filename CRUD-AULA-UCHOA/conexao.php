<?php
    // Parâmetro 1: localhost -> endereço do server de bd
    // Parâmetro 2: "root" -> nome do usuário do mysql
    // Parâmetro 3: senha do usuário do mysql
    // Parâmetro 4: "crud" -> nome do banco de dados
    
    $conn = mysqli_connect("localhost", "root", "", "crud");
?>