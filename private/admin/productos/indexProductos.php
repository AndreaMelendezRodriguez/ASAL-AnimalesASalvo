<?php
    session_start();

    if(isset($_SESSION['pepito'])){
        $sesion = '<a href="../../../auth/login/logout.php"><i class="fas fa-sign-out-alt"></i></a>';
    }else{
        $sesion = '<a href="../../../auth/login/login.php"><i class="fas fa-user"></i></a>';
    }

    require_once ('DatabaseProductos.php');
    $database = new DatabaseProductos();
    $resultados = $database->getAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Eugenia Ramos Santos y Andrea Meléndez Rodríguez">
    <meta name="description" content="Página de adopción de la protectora Asociación ASAL, animales a salvo">
    <meta name="keywords" content="Animales, adopción, rescate, asociación, perros, gatos, conejos, acogida, callejero">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x.icon" href="../../../img/logos/icono.ico">
    <link rel="stylesheet" href="../admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Productos - Admin | ASAL</title>
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
    <main>
        <section>
            <h1>Productos</h1>
            <a href="createProductos.php"><button>+ Añadir producto</button></a>
        </section>
        <section class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($resultados as $row) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['nombre'] . '</td>';
                            echo '<td>' . $row['precio'] . '</td>';
                            echo '<td>' . $row['stock'] . '</td>';
                            echo '<td class="acciones"><a href="deleteProductos.php?id='.$row['id'].'"><i class="fas fa-trash" style="color: #ff0000;"></i></a>  <a href="editProductos.php?id='.$row['id'].'"><i class="fas fa-edit" style="color: #ff9500;"></i></a></td>';
                            echo '</tr>';
                        }               
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Stock</td>
                        <td>Acciones</td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
</body>
</html>