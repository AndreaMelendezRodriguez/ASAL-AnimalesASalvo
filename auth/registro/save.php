<?php

    $valores = [$_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['email'], $_POST['contrasenia'], $_POST['fecha'], $_POST['dni'], $_POST['rol_id']];

    require_once ('Database.php');
    $database = new Database();
    $database->guardar($valores);

    header('Location: ../login/login.php');
?>