<?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        echo 'Hemos recogido el valor ' . $id;

        require_once('DatabaseProductos.php');
        $database = new DatabaseProductos();
        $database->delete('20_productos', $id);

        header('Location: indexProductos.php');

    }else{
        echo 'Error';
    }
?>