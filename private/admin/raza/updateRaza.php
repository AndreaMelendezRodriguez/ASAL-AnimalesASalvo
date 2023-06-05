<?php

    $valores = [$_POST['id'], $_POST['nombre'], $_POST['tipo_id']];

    require_once ('DatabaseRaza.php');
    $database = new DatabaseRaza();
    $database->actualizar($valores);

    header('Location: indexRaza.php');
?>