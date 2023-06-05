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
    <meta name="description" content="Página de la protectora Aociación ASAL, animales a salvo">
    <meta name="keywords" content="Animales, adopción, rescate, asociación, perros, gatos, conejos, acogida, callejero">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x.icon" href="../../img/logos/icono.ico">
    <link rel="stylesheet" href="donativos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ayúdanos - ASAL</title>
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
    <main class="donate">
        <div id="formulario">
            <h2 id="tituloFormulario">Colabora con nosotros: </h2>
            <button class="btnDonar" value="10">10€</button>
            <button class="btnDonar" value="20">20€</button>
            <button class="btnDonar" value="30">30€</button>
            <input type="text" placeholder="Otra cantidad" required class="btnDonar">
            <p style="margin-top: 15px;">Con cualquier ayuda podemos ofrecer una mejor calidad de vida para estos animales.</p>
            <label id="" name="" style="margin-top: 15px;">Email:</label>
            <input class="btnDonar" type="email" placeholder="Escribe tu email" autofocus>
            <br>
            <input style="margin-top: 15px;" type="checkbox">
            <label>He leído y acepto las Condiciones de uso y la política de privacidad.</label>
            <br>
            <input style="margin-top: 15px;" type="checkbox">
            <label>Quiero recibir comunicaciones de ASAL en mi dirección de correo.</label>
            <br>
            <button id="btnDonar" type="submit"><a href="../agradecimientoVoluntario/donaciones.php" style="text-decoration:none">Donar</a></button>
        </div>

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