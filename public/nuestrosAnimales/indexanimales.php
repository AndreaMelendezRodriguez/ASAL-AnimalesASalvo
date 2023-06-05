<?php
    session_start();

    if(isset($_SESSION['pepito'])){
        $sesion = '<a href="../../auth/login/logout.php"><i class="fas fa-sign-out-alt"></i></a>';
    }else{
        $sesion = '<a href="../../auth/login/login.php"><i class="fas fa-user"></i></a>';
    }

    require_once('Database.php');
    $database = new Database();
    $resultados = $database->getAll();
    $resultadosGatos = $database->getAll();
    $resultadosOtros = $database->getAll();
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
    <link rel="stylesheet" href="styleanimales.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Animales en adopción - ASAL</title>
</head>
<body>
    <header>
        <section id="header">
            <div>
                <p>Síguenos en RRSS <br></p>
                <p><a href="https://www.instagram.com
                    "><i class="fab fa-instagram"></i></a><a href="https://es-es.facebook.com"><i class="fab fa-facebook-square"></i></a><a href="https://twitter.com"><i
                        class="fab fa-twitter"></i></a><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></p>
                <p class="contact">+34 913 746 924 <br>asalasociacion@gmail.com</p>
            </div>
            <div>
                <a href="../index/index.php"><img id="logo" src="../../img/logos/logo2.png" alt="logo ASAL"></a>
            </div>
            <div>
                <p><input type="text"><i class="fas fa-search"></i><a href="#fo"><i class="fas fa-phone"></i></a><?php echo $sesion; ?></p>
            </div>
        </section>
    </header>
    <nav>
        <ul id="nav">
            <li> <a class="navnav" href="../index/index.php#datos" style="text-decoration:none">LA ASOCIACIÓN ASAL</a> </li>
            <li> <a class="navnav" href="../index/index.php#mainadopt" style="text-decoration:none">AYÚDALES</a> </li>
            <li> <a class="navnav" href="../index/index.php#tienda" style="text-decoration:none">AYÚDANOS</a> </li>
            <li> <a class="navnav" href="../nuestrosAnimales/indexanimales.php" style="text-decoration:none">NUESTROS ANIMALES</a> </li>
            <li> <a class="navnav" href="../donativos/donativos.php" style="text-decoration:none">HAZ UNA DONACIÓN</a> </li>
            <li> <a class="navnav" href="../tienda/tienda.php" style="text-decoration:none">TIENDA SOLIDARIA</a> </li>
            <li> <a class="navnav" href="../../auth/registro/formulario.php" style="text-decoration:none">HAZTE VOLUNTARI@</a> </li>
        </ul>
    </nav>
    <main>
        <section id="adopcion" class="adopcion">
            <p class="tituloadopcion">ADOPTA</p>
            <div class="navadopcion">
                <p><a href="#adoptperros" style="text-decoration:none">Perros</a></p>
                <p><a href="#adoptgatos" style="text-decoration:none">Gatos</a></p>
                <p><a href="#adoptotros" style="text-decoration:none">Otros animales</a></p>
            </div>
        </section>
        <h2 class="algunos">NUESTROS PERROS EN ADOPCIÓN</h2>
        <section id="adoptperros">
            <?php
                $idAnterior = null;
                foreach ($resultados as $row) {
                    if($row['tipo'] == "Perro"){
                        if ($idAnterior !== $row['id']) {
                            echo '<div class="cards">';
                            echo '<a href="../animales/perro.php?id='.$row['id'].'" style="text-decoration:none">';
                            echo '<div class="enadopcion">';
                            echo '<img class="cardsimg" src="../../img/animales/perros/' . $row['nombre'] . '/' . $row['ruta'] . '" alt="' . $row['nombre'] . '">';
                            echo '<h3 class="cardsname">' . $row['nombre'] . '</h3>';
                            echo '<span class="cardsdescription"><strong>Sexo: </strong>' . $row['sexo'] . '<br><strong>Edad: </strong>' . $row['edad'] . ' <br><strong>Tamaño: </strong>' . $row['tamanio'] . '</span>';
                            echo '<span class="estado">' . $row['estado'] . '</span>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }
                        $idAnterior = $row['id'];
                    }
                }
            ?>
        </section>
        <h2 class="algunos">NUESTROS GATOS EN ADOPCIÓN</h2>
        <section id="adoptgatos">
            <?php
                $idAnterior = null;
                foreach ($resultadosGatos as $row) {
                    if($row['tipo'] == "Gato"){
                        if ($idAnterior !== $row['id']) {
                            echo '<div class="cards">';
                            echo '<div class="enadopcion">';
                            echo '<img class="cardsimg" src="../../img/animales/gatos/' . $row['ruta'] . '" alt="' . $row['nombre'] . '">';
                            echo '<h3 class="cardsname">' . $row['nombre'] . '</h3>';
                            echo '<span class="cardsdescription"><strong>Sexo: </strong>' . $row['sexo'] . '<br><strong>Edad: </strong>' . $row['edad'] . '<br><strong>Tamaño: </strong>' . $row['tamanio'] . '</span>';
                            echo '<span class="estado">' . $row['estado'] . '</span>';
                            echo '</div>';
                            echo '</div>';
                        }
                        $idAnterior = $row['id'];
                    }
                }
            ?>
        </section>
        <h2 class="algunos">OTROS ANIMALES EN ADOPCIÓN</h2>
        <section id="adoptotros">
            <?php
                $idAnterior = null;
                foreach ($resultadosOtros as $row) {
                    if($row['tipo'] == "Otros"){
                        if ($idAnterior !== $row['id']) {
                            echo '<div class="cards">';
                            echo '<div class="enadopcion">';
                            echo '<img class="cardsimg" src="../../img/animales/otros/' . $row['ruta'] . '" alt="' . $row['nombre'] . '">';
                            echo '<h3 class="cardsname">' . $row['nombre'] . '</h3>';
                            echo '<span class="cardsdescription"><strong>Sexo: </strong>' . $row['sexo'] . '<br><strong>Edad: </strong>' . $row['edad'] . '</span>';
                            echo '<span class="estado">' . $row['estado'] . '</span>';
                            echo '</div>';
                            echo '</div>';
                        }
                        $idAnterior = $row['id'];
                    }
                }
            ?>
        </section>
    </main>
    <footer>
        <section id="fo" class="footer">
            <div class="contenido">
                <h4>¿DÓNDE PUEDES ENCONTRARNOS?</h4>
                <P>Nos encontramos ubicados en la localidad de Getafe, Madrid.</P>
                <P>Nuestro horario de visitas es de lunes a sábado de 10:00 a 14:00 y de 16:00 a 20:00</p>
                <address id="calle" style="text-decoration:none">Calle Rio Ardila, 4 <br>28906 Getafe, Madrid</address>
                <p><a href="https://www.instagram.com
                    "><i class="fab fa-instagram"></i></a><a href="https://es-es.facebook.com"><i class="fab fa-facebook-square"></i></a><a href="https://twitter.com"><i
                        class="fab fa-twitter"></i></a><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a><i class="far fa-envelope"></i><i
                        class="fas fa-phone"></i></p>
            </div>
            <div class="contenido">
                <h4>LO QUE HACEMOS</h4>
                <p> <a class="foot" href="../index/index.php#datos" class="footer_link" style="text-decoration:none">Quiénes somos</a></p>
                <p> <a class="foot" href="../nuestrosAnimales/indexanimales.php" class="footer_link"
                        style="text-decoration:none">Animales en
                        adopción</a></p>
                <p><a class="foot" href="../tienda/tienda.php" class="footer_link" style="text-decoration:none">Tienda
                        solidaria</a>
                </p>
                <p><a class="foot" href="../../auth/registro/formulario.php" class="footer_link" style="text-decoration:none">Hacerme
                        voluntario</a>
                </p>
                <p><a class="foot" href="../donativos/donativos.php" class="footer_link" style="text-decoration:none">Hacer una donación</a>
                </p>
                <p><a class="foot" href="../index/index.php#calendario" class="footer_link" style="text-decoration:none">Calendario de
                        visitas</a> </p>
            </div>
            <div class="contenido">
                <h4>INFORMACIÓN</h4>
                <p class="foot">Aviso legal y Protección de datos</p>
                <p class="foot">Cookies</p>
                <p class="foot">Términos y Condiciones</p>
            </div>
        </section>
    </footer>
</body>
</html>