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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesión</title>
</head>

<body>
    <header>
        <section id="header">
            <div>
                <p>Síguenos en RRSS <br></p>
                <p><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a><a
                        href="https://es-es.facebook.com/"><i class="fab fa-facebook-square"></i></a><a
                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a><a
                        href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></p>
                <p class="contact">+34 913 746 924 <br>asalasociacion@gmail.com</p>
            </div>
            <div>
                <a href="../../public/index/index.php"><img id="logo" src="../../img/logos/logo2.png"
                        alt="logo ASAL"></a>
            </div>
            <div>
                <p><input type="text"><i class="fas fa-search"></i><a href="login.php"><i class="fas fa-user"></i></a>
                </p>
            </div>
        </section>
    </header>
    <main>
        <div class="container">
            <form id="login-form" action="comprobar.php" method="post">
                <h2>INICIAR SESIÓN</h2>
                <div class="form-group">
                    <br>
                    <label for="username">Email: </label>
                    <input type="email" name="email" placeholder="Escribe tu email" required>
                    <span id="email-error"></span>
                    <br>
                </div>
                <div class="form-group">
                    <br>
                    <label for="password">Contraseña: </label>
                    <input type="password" name="password" placeholder="Escribe tu contraseña">
                    <span id="password-error"></span>
                    <br>
                </div>
                <div class="form-group">
                    <br>
                    <button id="login-button" type="submit"> Iniciar sesión</button>
                    <br>
                </div>
                <div class="sincuenta">
                    <p class="sincuenta">¿Aún no tienes una cuenta? <a href="../registro/formulario.php"
                            class="formular">Registrarme
                        </a></p>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <section class="footer">
            <div class="contenido">
                <h4>¿DÓNDE PUEDES ENCONTRARNOS?</h4>
                <P>Nos encontramos ubicados en la localidad de Getafe, Madrid.</P>
                <P>Nuestro horario de visitas es de lunes a sábado de 10:00 a 14:00 y de 16:00 a 20:00</p>
                <address id="calle" style="text-decoration:none">Calle Rio Ardila, 4 <br>28906 Getafe, Madrid</address>
                <p><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a><a
                        href="https://es-es.facebook.com/"><i class="fab fa-facebook-square"></i></a><a
                        href="https://twitter.com/"><i class="fab fa-twitter"></i></a><a
                        href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a><i
                        class="far fa-envelope"></i><i class="fas fa-phone"></i></p>
            </div>
            <div class="contenido">
                <h4>LO QUE HACEMOS</h4>
                <p> <a class="foot" href="../../public/index/index.php#datos" class="footer_link"
                        style="text-decoration:none">Quiénes somos</a></p>
                <p> <a class="foot" href="../../public/nuestrosAnimales/indexanimales.php" class="footer_link"
                        style="text-decoration:none">Animales en
                        adopción</a></p>
                <p><a class="foot" href="../../public/tienda/tienda.php" class="footer_link"
                        style="text-decoration:none">Tienda
                        solidaria</a>
                </p>
                <p><a class="foot" href="../../auth/registro/formulario.php" class="footer_link"
                        style="text-decoration:none">Hacerme
                        voluntario</a>
                </p>
                <p><a class="foot" href="../../public/donativos/donativos.php" class="footer_link"
                        style="text-decoration:none">Hacer una donación</a>
                </p>
                <p><a class="foot" href="../../public/index/index.php#calendario" class="footer_link"
                        style="text-decoration:none">Calendario de
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