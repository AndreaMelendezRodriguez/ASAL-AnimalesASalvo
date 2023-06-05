<?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        echo 'Hemos recogido el valor ' . $id;

        require_once('DatabaseAnimales.php');
        $database = new DatabaseAnimales();
        $database->delete('20_animales', $id);

        header('Location: indexAnimales.php');

    }else{
        echo 'Error';
    }
?>