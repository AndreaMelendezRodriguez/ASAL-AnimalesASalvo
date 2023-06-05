<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once ('DatabaseUsuarios.php');

    $database = new Database();

    $respuesta = $database->login($email, $password);
    

    if($respuesta == null){
        header('Location: login.php');
    }else{
        if($respuesta['rol_id'] == 2){
            session_start();
            $_SESSION['pepito'] = $respuesta;
            header('Location: ../../private/admin/admin.php');
        }else if($respuesta['rol_id'] == 1){
            session_start();
            $_SESSION['pepito'] = $respuesta;
            header('Location: ../../public/index/index.php');
        }else if($respuesta['rol_id'] == 3){
            session_start();
            $_SESSION['pepito'] = $respuesta;
            header('Location: ../../public/index/index.php');
        }else{
            header('Location: login.php');
        }
    }
?>