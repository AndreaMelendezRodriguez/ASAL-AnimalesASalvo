<?php

    $valores = [$_POST['id'], $_POST['nombre'], $_POST['edad'], $_POST['fecha_nacimiento'], $_POST['fecha_entrada'], $_POST['estado_id'], $_POST['usuarios_id'], $_POST['tamanio_id'], $_POST['sexo_id'], $_POST['tipo_id'], $_POST['descripcion']];

    require_once ('DatabaseAnimales.php');
    $database = new DatabaseAnimales();
    $database->actualizar($valores);

    header('Location: indexAnimales.php');
?>