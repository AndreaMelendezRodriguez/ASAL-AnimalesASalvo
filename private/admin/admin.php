<?php
    session_start();

    if(isset($_SESSION['pepito'])){
        $sesion = '<a href="../../auth/login/logout.php"><i class="fas fa-sign-out-alt"></i></a>';
    }else{
        $sesion = '<a href="../../auth/login/login.php"><i class="fas fa-user"></i></a>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Eugenia Ramos Santos y Andrea Meléndez Rodríguez">
    <meta name="description" content="Página de adopción de la protectora Asociación ASAL, animales a salvo">
    <meta name="keywords" content="Animales, adopción, rescate, asociación, perros, gatos, conejos, acogida, callejero">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x.icon" href="../../img/logos/icono.ico">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <title>Admin - ASAL</title>
</head>

<body>
<header>
        <section id="header">
            <div>
                <p class="contact">+34 913 746 924 <br>asalasociacion@gmail.com</p>
            </div>
            <div>
                <a href="../../public/index/index.php"><img id="logo" src="../../img/logos/logo2.png" alt="logo ASAL"></a>
            </div>
            <div>
                <p><input type="text"><i class="fas fa-search"></i><a href="#fo"><i class="fas fa-phone"></i></a><?php echo $sesion; ?></p>
            </div>
        </section>
    </header>
    <main>
        <section>
            <h1>Admin</h1>
        </section>
        <section class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Animales</td>
                        <td>Tabla de administración de animales</td>
                        <td><a href="animales/indexAnimales.php"><i class="fas fa-link"></a></td>
                    </tr>
                    <tr>
                        <td>Donativos</td>
                        <td>Tabla de administración de donativos</td>
                        <td><a href="donativos/indexDonativos.php"><i class="fas fa-link"></i></a></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>Tabla de administración de estado</td>
                        <td><a href="estado/indexEstado.php"><i class="fas fa-link"></i></a></td>
                    </tr>
                    <tr>
                        <td>Productos</td>
                        <td>Tabla de administración de productos</td>
                        <td><a href="productos/indexProductos.php"><i class="fas fa-link"></a></td>
                    </tr>
                    <tr>
                        <td>Raza</td>
                        <td>Tabla de administración de raza</td>
                        <td><a href="raza/indexRaza.php"><i class="fas fa-link"></a></td>
                    </tr>
                    <tr>
                        <td>Usuarios</td>
                        <td>Tabla de administración de usuarios</td>
                        <td><a href="usuarios/indexUsuarios.php"><i class="fas fa-link"></a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Link</td>
                    </tr>
                </tfoot>
            </table>
        </section>

    </main>
    <footer></footer>
</body>

</html>