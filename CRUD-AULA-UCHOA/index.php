<?php

    include 'conexao.php';

?>

<h2>usuário</h2>

<a href="form.php">Novo</a><br>

<?php

$res = mysqli_query($conn, "SELECT * FROM usuários");

while ($r = mysqli_fetch_assoc($res))
{
    echo $r['nome'] . " - " . $r['email'] . "<br>";
}

?>