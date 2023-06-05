<?php

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        echo 'Hemos recogido el valor ' . $id;

        require_once('DatabaseDonativos.php');
        $database = new DatabaseDonativos();
        $database->delete('20_donativos', $id);

        header('Location: indexDonativos.php');

    }else{
        echo 'Error';
    }

?>