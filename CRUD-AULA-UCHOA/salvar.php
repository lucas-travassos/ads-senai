<?php

include 'conexao.php';

mysqli_query($conn, "INSERT INTO usuários(nome, email) VALUES ('$_POST[nome]', '$_POST[email]')");

header("location: index.php");

?>