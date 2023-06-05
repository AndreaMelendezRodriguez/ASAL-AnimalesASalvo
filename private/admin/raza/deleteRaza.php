<?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        echo 'Hemos recogido el valor ' . $id;

        require_once('DatabaseRaza.php');
        $database = new DatabaseRaza();
        $database->delete('raza', $id);

        header('Location: indexRaza.php');

    }else{
        echo 'Error';
    }
?>