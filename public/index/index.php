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
    <meta name="description" content="Página de la protectora Asociación ASAL, animales a salvo">
    <meta name="keywords" content="Animales, adopción, rescate, asociación, perros, gatos, conejos, acogida, callejero">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x.icon" href="../../img/logos/icono.ico">
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Asociación ASAL - Animales A Salvo</title>
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
                <a href="index.php"><img id="logo" src="../../img/logos/logo2.png" alt="logo ASAL"></a>
            </div>
            <div>
                <p><input class="input-field" type="text" id="search-input"><i class="fas fa-search"></i><a href="#fo"><i class="fas fa-phone"></i></a><?php echo $sesion; ?></p>
            </div>
        </section>
    </header>
    <nav>
        <ul id="nav">
            <li> <a class="navnav1" href="#datos" style="text-decoration:none">LA ASOCIACIÓN ASAL</a> </li>
            <li> <a class="navnav1" href="#mainadopt" style="text-decoration:none">AYÚDALES</a> </li>
            <li> <a class="navnav1" href="#tienda" style="text-decoration:none">AYÚDANOS</a> </li>
            <li> <a class="navnav" href="../nuestrosAnimales/indexanimales.php" style="text-decoration:none">NUESTROS ANIMALES</a> </li>
            <li> <a class="navnav" href="../donativos/donativos.php" style="text-decoration:none">HAZ UNA DONACIÓN</a> </li>
            <li> <a class="navnav" href="../tienda/tienda.php" style="text-decoration:none">TIENDA SOLIDARIA</a> </li>
            <li> <a class="navnav" href="../../auth/registro/formulario.php" style="text-decoration:none">HAZTE VOLUNTARI@</a> </li>
        </ul>
    </nav>
    <main>
        <section class="portada">
            <div class="textoadopta">
                <h1 class="titulo">¡ADOPTA!</h1>
                <h3 class="subtitulo">Ahora necesitan tu ayuda más que nunca</h3>
                <a href="../nuestrosAnimales/indexanimales.php" style="text-decoration:none">
                    <p class="botonheader"> Nuestros animales </p>
                </a>
            </div>
        </section>
        <section id="datos" class="datos">
            <div class="datos1">
                <p class="titulodatos">QUIÉNES SOMOS</p>
                <p class="textodatos">Somos una asociación sin ánimo de lucro fundada en 2009 <br>con el objetivo de
                    prestar
                    auxilio a animales en situación de <br>desamparo. Nuestro objetivo es rescatarles del abandono <br>y
                    el
                    maltrato, recuperarles en lo posible tanto de sus daños <br>físicos como psicológicos, y
                    finalmente conseguirles y una <br>familia digna de ellos donde ser amados como merecen.
                </p>
            </div>
            <div class="datos2">
                <p class="titulodatos">QUÉ HACEMOS</p>
                <p class="textodatos">Nuestro trabajo se centra en la protección y defensa de los <br>animales en un
                    sentido amplio, tanto a corto plazo, <br>proporcionando un hogar a los animales abandonados,
                    <br>como a largo plazo,
                    difundiendo una cultura y educación <br>basadas en el conocimiento y respeto hacia los animales,
                    <br>fomentando
                    una tenencia responsable de cualquier ser vivo.
                </p>
            </div>
            <div class="datos3">
                <p class="titulodatos">NUESTRA HISTORIA</p>
                <p class="textodatos">Surgimos hace más de 10 años como respuesta al elevado <br>número de animales que
                    son
                    abandonados y/o maltratados <br>a diario en este país y como una alternativa útil y humanitaria
                    <br>para mejorar la
                    situación actual. Todas las personas que <br>componemos el equipo de voluntarios procedemos del
                    <br>mundo
                    de la protección animal, en el que hemos trabajado <br>durante muchos años y por el que seguimos
                    luchando</p>
            </div>
        </section>
        <section id="mainadopt">
            <h2 class="algunos">ALGUNOS DE NUESTROS ANIMALES EN ADOPCIÓN</h2>
            <div id="cards" class="cards">
                <div class="enadopcion">
                    <img class="cardsimg" src="../../img/index/a1.jpg" alt="Anuar">
                    <h3 class="cardsname">ANUAR</h3>
                    <span class="cardsdescription"><strong>Sexo:</strong> Macho <br><strong>Edad:</strong> 8 meses
                        <br><strong>Tamaño:</strong> Mediano-Grande</span>
                    <span class="estado">EN ADOPCIÓN</span>
                </div>
                <div class="enadopcion">
                    <img class="cardsimg" src="../../img/index/a2.jpg" alt="Mustang">
                    <h3 class="cardsname">MUSTANG</h3>
                    <span class="cardsdescription"><strong>Sexo:</strong> Macho <br><strong>Edad:</strong> 1 año
                        <br><strong>Tamaño:</strong> Grande</span>
                    <span class="estado">EN ADOPCIÓN</span>
                </div>
                <div class="enadopcion">
                    <img class="cardsimg" src="../../img/index/a3.jpg" alt="Bimba y Balu">
                    <h3 class="cardsname">BIMBA Y BALU</h3>
                    <span class="cardsdescription"><strong>Sexo:</strong> Macho y Hembra <br><strong>Edad:</strong> 1
                        año <br><strong>Tamaño:</strong> Mediano</span>
                    <span class="estado">ADOPCIÓN CONJUNTA</span>
                </div>
                <div class="enadopcion">
                    <img class="cardsimg" src="../../img/index/A4.jpg" alt="vera">
                    <h3 class="cardsname">VERA</h3>
                    <span class="cardsdescription"><strong>Sexo:</strong> Hembra <br><strong>Edad:</strong> 13 años
                        <br><strong>Tamaño:</strong> Grande</span>
                    <span class="estado">EN ADOPCIÓN</span>
                </div>
                <div class="enadopcion">
                    <img class="cardsimg" src="../../img/index/a5.jpg" alt="Eneko">
                    <h3 class="cardsname">ENEKO</h3>
                    <span class="cardsdescription"><strong>Sexo:</strong> Macho <br><strong>Edad:</strong> 5 años
                        <br><strong>Tamaño:</strong> Pequeño</span>
                    <span class="estado">EN ADOPCIÓN</span>
                </div>
            </div>
        </section>
        <section id="tienda" class="tiendas">
            <div class="tiendas1">
                <h2 class="titulotiendas">TIENDA SOLIDARIA</h2>
                <p class="textotiendas">Nuestra tienda solidaria vende productos para todo tipo de animales y la
                    recaudación íntegra va dirigida al mantenimiento y cuidado de nuestros animales como de nuestras
                    instalaciones.</p>
                <a href="../tienda/tienda.php" class="buttontiendas" style="text-decoration:none">Ir a la tienda</a>
            </div>
            <div class="tiendas2">
                <h2 class="titulotiendas">HAZTE VOLUNTARI@</h2>
                <p class="textotiendas">Sin vuestra colaboración, ayuda y apoyo no podríamos seguir adelante. Hoy más
                    que nunca os necesitamos, juntos podremos conseguirlo. Gracias a todos los que dedicais vuestro
                    tiempo libre y esfuerzo desinteresado sólo por amor a los animales.</p>
                <a href="../../auth/registro/formulario.php" class="buttontiendas" style="text-decoration:none">Quiero ser voluntari@</a>
            </div>
            <div class="tiendas3">
                <h2 class="titulotiendas">HISTORIAS FELICES</h2>
                <p class="textotiendas">Gracias a todos vosotros podemos tener una sección donde contar las preciosas
                    historias de algunos de nuestros animales que han sido adoptados y que hoy en día tienen la vida que
                    se merecen.</p>
                <a href="../finalesFelices/finalesfelices.php" class="buttontiendas" style="text-decoration:none">Ver las historias</a>
            </div>
        </section>
        <section id="calendario" class="calendario">
            <div>
                <p class="titulocalendario">¿QUIERES VENIR A VISITARNOS? COGE CITA:</p>
                <p class="textocalendario">Es necesario reservar cita en nuestro calendario para poder realizar una
                    visita, <br> nuestro horario para ello es de lunes a sábado de 10:00 a 14:00 y de 16:00 a 20:00.
                    <br> ¡Ellos están deseando conocerte!</p>
                <p class="botoncalendario">Ir al calendario</p>
            </div>
            <div>
                <img class="imagencalendario" src="../../img/index/2.webp" alt="foto de perro">
            </div>
        </section>
        <section class="clinicas">
            <p>CLÍNICAS COLABORADORAS</p>
            <div>
                <div><img class="imagenclinicas" src="../../img/logos/z.png" alt="clinicas"></div>
                <div><img class="imagenclinicas" src="../../img/logos/z1.jpg" alt="clinicas"></div>
                <div><img class="imagenclinicas" src="../../img/logos/z2.png" alt="clinicas"></div>
                <div><img class="imagenclinicas" src="../../img/logos/Z3.png" alt="clinicas"></div>
                <div><img class="imagenclinicas" src="../../img/logos/Z4.png" alt="clinicas"></div>
            </div>
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
                    " style="text-decoration:none"><i class="fab fa-instagram"></i></a><a href="https://es-es.facebook.com" style="text-decoration:none"><i class="fab fa-facebook-square"></i></a><a href="https://twitter.com" style="text-decoration:none"><i
                        class="fab fa-twitter"></i></a><a href="https://www.youtube.com/" style="text-decoration:none"><i class="fab fa-youtube"></i></a><i class="far fa-envelope"></i><i
                        class="fas fa-phone"></i></p>
            </div>
            <div class="contenido">
                <h4>LO QUE HACEMOS</h4>
                <p> <a class="foot1" href="#datos" class="footer_link" style="text-decoration:none">Quiénes somos</a></p>
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
                <p><a class="foot1" href="#calendario" class="footer_link" style="text-decoration:none">Calendario de
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
    <script>
        $(".navnav1").on("click", function (e) {
        e.preventDefault();
        const href = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
        });

        $(".foot1").on("click", function (e) {
        e.preventDefault();
        const href = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(href).offset().top }, 800);
        });
    </script>
</body>
</html>