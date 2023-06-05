<?php

    $valores = [$_POST['id'], $_POST['nombre']];

    require_once ('DatabaseEstado.php');
    $database = new DatabaseEstado();
    $database->actualizar($valores);

    header('Location: indexEstado.php');
?>