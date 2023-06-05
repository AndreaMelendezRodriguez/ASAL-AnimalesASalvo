<?php

    $valores = [$_POST['nombre'], $_POST['tipo_id']];

    require_once ('DatabaseRaza.php');
    $database = new DatabaseRaza();
    $database->guardar($valores);

    header('Location: indexRaza.php');
?>