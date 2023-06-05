<?php

    $valores = [$_POST['nombre']];

    require_once ('DatabaseEstado.php');
    $database = new DatabaseEstado();
    $database->guardar($valores);

    header('Location: indexEstado.php');
?>