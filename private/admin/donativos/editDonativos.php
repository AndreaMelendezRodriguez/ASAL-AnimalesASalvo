<?php
    session_start();

    if(isset($_SESSION['pepito'])){
        $sesion = '<a href="../../../auth/login/logout.php"><i class="fas fa-sign-out-alt"></i></a>';
    }else{
        $sesion = '<a href="../../../auth/login/login.php"><i class="fas fa-user"></i></a>';
    }

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        require_once ('DatabaseDonativos.php');
        $database = new DatabaseDonativos();
        $donativo = $database->getId($id);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Eugenia Ramos Santos y Andrea Meléndez Rodríguez">
    <meta name="description" content="Página de la protectora Aociación ASAL, animales a salvo">
    <meta name="keywords" content="Animales, adopción, rescate, asociación, perros, gatos, conejos, acogida, callejero">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x.icon" href="../../../img/logos/icono.ico">
    <link rel="stylesheet" href="../create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Donativos - Admin | ASAL</title>
</head>
<body>
    <header>
        <section id="header">
            <div>
                <p class="contact">+34 913 746 924 <br>asalasociacion@gmail.com</p>
            </div>
            <div>
                <a href="../../../public/index/index.php"><img id="logo" src="../../../img/logos/logo2.png" alt="logo ASAL"></a>
            </div>
            <div>
                <p><input type="text"><i class="fas fa-search"></i><a href="#fo"><i class="fas fa-phone"></i></a><?php echo $sesion; ?></p>
            </div>
        </section>
    </header>
    
    <h1>Actualizar donativo</h1>
    <form action="updateDonativos.php" method="POST">
        <input type="hidden" value="<?php echo $donativo['id']?>" name="id">
        <label id="" name="">Fecha: </label>
        <input type="text" value="<?php echo $donativo['fecha']?>" name="fecha">
        <br>
        <br>
        <label id="" name="">Cantidad: </label>
        <input type="text" value="<?php echo $donativo['cantidad']?>" name="cantidad">
        <br>
        <br>
        <label id="" name="">Id del usuario: </label>
        <input type="text" value="<?php echo $donativo['usuarios_id']?>" name="usuarios_id">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</body>
</html>
</html>