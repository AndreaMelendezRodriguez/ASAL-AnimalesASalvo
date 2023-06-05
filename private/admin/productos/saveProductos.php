<?php

    $valores = [$_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['descripcion']];

    require_once ('DatabaseProductos.php');
    $database = new DatabaseProductos();
    $database->guardar($valores);

    header('Location: indexProductos.php');
?>