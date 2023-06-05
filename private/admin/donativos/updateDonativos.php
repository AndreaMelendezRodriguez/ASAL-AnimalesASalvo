<?php

    $valores = [$_POST['id'], $_POST['fecha'], $_POST['cantidad'], $_POST['usuarios_id']];

    require_once ('DatabaseDonativos.php');
    $database = new DatabaseDonativos();
    $database->actualizar($valores);

    header('Location: indexDonativos.php');
?>