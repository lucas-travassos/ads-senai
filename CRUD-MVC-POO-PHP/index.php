<!-- Rotas / chamadas de métodos -->

<?php

    require_once('./controllers/clientsController.php');

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller = new clientsController();

    $controller->{$action}();

?>