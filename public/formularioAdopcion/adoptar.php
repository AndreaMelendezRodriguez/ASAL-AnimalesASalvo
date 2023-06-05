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
    <link rel="stylesheet" href="adoptar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Formulario de Adopción - ASAL</title>
</head>

<body>
    <header>
        <section id="header">
            <div>
                <p>Síguenos en RRSS <br></p>
                <p><a href="https://www.instagram.com
                    "><i class="fab fa-instagram"></i></a><a href="https://es-es.facebook.com"><i
                            class="fab fa-facebook-square"></i></a><a href="https://twitter.com"><i
                            class="fab fa-twitter"></i></a><a href="https://www.youtube.com/"><i
                            class="fab fa-youtube"></i></a></p>
                <p class="contact">+34 913 746 924 <br>asalasociacion@gmail.com</p>
            </div>
            <div>
                <a href="../index/index.php"><img id="logo" src="../../img/logos/logo2.png" alt="logo ASAL"></a>
            </div>
            <div>
                <p><input type="text"><i class="fas fa-search"></i><a href="#fo"><i
                            class="fas fa-phone"></i></a><?php echo $sesion; ?></p>
            </div>
        </section>
    </header>
    <main>
    <form id="formulario" action="../agradecimientoVoluntario/formularioAdopcion.php" method="POST">
            <h2>¿Estás pensando en adoptar un animal de compañía?</h2>
            <br>
            <h4>Si estás pensando adoptar un perro o gato, te ayudamos a reﬂexionar y conocer las principales
                implicaciones de esta importante decisión y cómo armonizar tu estilo de vida con el bienestar de tu
                perro o gato.</h4>
            <br>
            <label id="" name=""><strong> 1. ¿Dónde vives?</strong></label>
            <br>
            <br>
            <input type="radio" name="vivir">
            <label>En un piso pequeño sin balcón/patio/terraza</label>
            <br>
            <input type="radio" name="vivir">
            <label>En un piso pequeño con balcón/terraza/patio</label>
            <br>
            <input type="radio" name="vivir">
            <label>En un piso amplio sin balcón/terraza/patio</label>
            <br>
            <input type="radio" name="vivir">
            <label>En un piso amplio con balcón/terraza/patio</label>
            <br>
            <input type="radio" name="vivir">
            <label>En una casa con balcón/terraza/patio</label>
            <br>
            <input type="radio" name="vivir">
            <label>Otro</label>
            <br>
            <br>
            <label id="" name=""><strong>2. ¿Cuánto estás dispuesto a gastar como mínimo en su manutención
                    mensual?</strong> </label>
            <br>
            <br>
            <input type="radio" name="manutencion">
            <label>No lo sé</label>
            <br>
            <input type="radio" name="manutencion">
            <label>Menos de 30€</label>
            <br>
            <input type="radio" name="manutencion">
            <label>De 30€ a 60€</label>
            <br>
            <input type="radio" name="manutencion">
            <label>De 61€ a 150€</label>
            <br>
            <input type="radio" name="manutencion">
            <label>Lo que sea necesario</label>
            <br>
            <br>
            <label id="" name=""><strong>3. ¿Cuánto tiempo estaría solo el animal en casa?</strong> </label>
            <br>
            <br>
            <input type="radio" name="tiempo">
            <label>Se quedaría solo más de 12 horas al día</label>
            <br>
            <input type="radio" name="tiempo">
            <label>Se quedaría solo entre 8 y 12 horas al día</label>
            <br>
            <input type="radio" name="tiempo">
            <label>Se quedaría solo entre 4 y 8 horas al día</label>
            <br>
            <input type="radio" name="tiempo">
            <label>Casi siempre hay alguien en casa; se quedaría solo menos de 4 horas al día</label>
            <br>
            <br>
            <label id="" name=""><strong>4. ¿Cambias de trabajo a menudo?</strong> </label>
            <br>
            <br>
            <input type="radio" name="trabajo">
            <label>Una vez al año de media</label>
            <br>
            <input type="radio" name="trabajo">
            <label>Cada pocos años</label>
            <br>
            <input type="radio" name="trabajo">
            <label>Llevo mucho tiempo en el mismo trabajo</label>
            <br>
            <input type="radio" name="trabajo">
            <label>En este momento estoy buscando trabajo</label>
            <br>
            <br>
            <label id="" name=""><strong>5. ¿Has cambiado de vivienda en los últimos años?</strong> </label>
            <br>
            <br>
            <input type="radio" name="casa">
            <label>Sí, una o más veces en los últimos 2 años</label>
            <br>
            <input type="radio" name="casa">
            <label>Estoy en ello o tengo pensado hacerlo a corto plazo</label>
            <br>
            <input type="radio" name="casa">
            <label>No, ni tengo intención a medio-largo plazo</label>
            <br>
            <br>
            <label id="" name=""><strong>6. ¿Tienes perro/gato actualmente?</strong> </label>
            <br>
            <br>
            <input type="radio" name="animales">
            <label>Si, un macho</label>
            <br>
            <input type="radio" name="animales">
            <label>Si, una hembra</label>
            <br>
            <input type="radio" name="animales">
            <label>Si, un macho y una hembra</label>
            <br>
            <input type="radio" name="animales">
            <label>No tengo perro/gato</label>
            <br>
            <br>
            <label id="" name=""><strong> 7. ¿Conviven contigo otros animales domésticos que no sean perros o
                    gatos?</strong></label>
            <br>
            <br>
            <input type="radio" name="otros">
            <label>Si</label>
            <br>
            <input type="radio" name="otros">
            <label>No</label>
            <br>
            <br>
            <label id="" name=""><strong>8. ¿Hay niños pequeños en casa?</strong> </label>
            <br>
            <br>
            <input type="radio" name="niños">
            <label>Si</label>
            <br>
            <input type="radio" name="niños">
            <label>No</label>
            <br>
            <br>
            <label id="" name=""><strong> 9. ¿Es el primer perro/gato que vas a tener en tu vida?</strong></label>
            <br>
            <br>
            <input type="radio" name="primer">
            <label>Si, es el primer perro/gato que voy/vamos a tener</label>
            <br>
            <input type="radio" name="primer">
            <label>No, ya he/hemos tenido algún perro</label>
            <br>
            <br>
            <label id="" name=""><strong>10. ¿Algún tamaño en especial?</strong> </label>
            <br>
            <br>
            <input type="radio" name="tamaño">
            <label>Mini</label>
            <br>
            <input type="radio" name="tamaño">
            <label>Pequeño</label>
            <br>
            <input type="radio" name="tamaño">
            <label>Mediano</label>
            <br>
            <input type="radio" name="tamaño">
            <label>Grande</label>
            <br>
            <input type="radio" name="tamaño">
            <label>Gigante</label>
            <br>
            <br>
            <label id="" name=""><strong>11. ¿Cuál es tu estilo de vida?</strong> </label>
            <br>
            <br>
            <input type="radio" name="estilo">
            <label>Soy una persona activa y realizo actividades en las que podría acompañarme un perro</label>
            <br>
            <input type="radio" name="estilo">
            <label>Soy activo, pero las actividades que realizo no son compatibles con perros</label>
            <br>
            <input type="radio" name="estilo">
            <label>Soy una persona casera. Paso mucho tiempo en casa</label>
            <br>
            <input type="radio" name="estilo">
            <label>Realizo actividades los fines de semana</label>
            <br>
            <br>
            <label id="" name=""><strong>12. ¿Cómo será el paseo del perro?</strong> </label>
            <br>
            <br>
            <input type="radio" name="paseo">
            <label>Saldremos a pasear por zonas con jardines, parques de perros, el campo...</label>
            <br>
            <input type="radio" name="paseo">
            <label>La zona de paseo es en el centro de mi ciudad</label>
            <br>
            <input type="radio" name="paseo">
            <label>Mi casa es muy grande, no saldremos a pasear</label>
            <br>
            <br>
            <button id="formular" type="submit" class="letra">Enviar</button>
        </form>
    </main>
    <footer>
        <section id="fo" class="footer">
            <div class="contenido">
                <h4>¿DÓNDE PUEDES ENCONTRARNOS?</h4>
                <P>Nos encontramos ubicados en la localidad de Getafe, Madrid.</P>
                <P>Nuestro horario de visitas es de lunes a sábado de 10:00 a 14:00 y de 16:00 a 20:00</p>
                <address id="calle" style="text-decoration:none">Calle Rio Ardila, 4 <br>28906 Getafe, Madrid</address>
                <p><a href="https://www.instagram.com
                    "><i class="fab fa-instagram"></i></a><a href="https://es-es.facebook.com"><i
                            class="fab fa-facebook-square"></i></a><a href="https://twitter.com"><i
                            class="fab fa-twitter"></i></a><a href="https://www.youtube.com/"><i
                            class="fab fa-youtube"></i></a><i class="far fa-envelope"></i><i class="fas fa-phone"></i>
                </p>
            </div>
            <div class="contenido">
                <h4>LO QUE HACEMOS</h4>
                <p> <a class="foot" href="../index/index.php#datos" class="footer_link"
                        style="text-decoration:none">Quiénes somos</a></p>
                <p> <a class="foot" href="../nuestrosAnimales/indexanimales.php" class="footer_link"
                        style="text-decoration:none">Animales en
                        adopción</a></p>
                <p><a class="foot" href="../tienda/tienda.php" class="footer_link" style="text-decoration:none">Tienda
                        solidaria</a>
                </p>
                <p><a class="foot" href="../../auth/registro/formulario.php" class="footer_link"
                        style="text-decoration:none">Hacerme
                        voluntario</a>
                </p>
                <p><a class="foot" href="../donativos/donativos.php" class="footer_link"
                        style="text-decoration:none">Hacer una donación</a>
                </p>
                <p><a class="foot" href="../index/index.php#calendario" class="footer_link"
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