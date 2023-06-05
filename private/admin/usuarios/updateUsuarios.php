<?php

    $valores = [$_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['email'], $_POST['contrasenia'], $_POST['fecha'], $_POST['dni'], $_POST['rol_id']];

    require_once ('DatabaseUsuarios.php');
    $database = new DatabaseUsuarios();
    $database->actualizar($valores);

    header('Location: indexUsuarios.php');
?>