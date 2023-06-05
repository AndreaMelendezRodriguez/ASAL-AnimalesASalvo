<?php

    $valores = [$_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['stock'], $_POST['descripcion']];

    require_once ('DatabaseProductos.php');
    $database = new DatabaseProductos();
    $database->actualizar($valores);

    header('Location: indexProductos.php');
?>