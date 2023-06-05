DROP DATABASE IF EXISTS protectora;
CREATE DATABASE IF NOT EXISTS protectora;
USE protectora;

CREATE TABLE IF NOT EXISTS 20_rol (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(12) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_productos (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(45) NOT NULL,
    precio DECIMAL(4,2) NOT NULL,
    stock INT NOT NULL,
    descripcion TEXT NOT NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_sexo (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tipo VARCHAR(10) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_tamanio (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(10) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_tipo(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(10) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_estado(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_raza(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    tipo_id INT,
    CONSTRAINT FOREIGN KEY (tipo_id) REFERENCES 20_tipo(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_usuarios(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellidos VARCHAR(25) NOT NULL,
    telefono VARCHAR(12),
    email VARCHAR(45) NOT NULL,
    contrasenia VARCHAR(20) NOT NULL,
    fecha DATE,
    dni VARCHAR(9) UNIQUE,
    rol_id INT, 
    CONSTRAINT FOREIGN KEY (rol_id) REFERENCES 20_rol(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_usuarios_has_rol(
	usuarios_id INT,
    rol_id INT,
    CONSTRAINT FOREIGN KEY (usuarios_id) REFERENCES 20_usuarios(id),
    CONSTRAINT FOREIGN KEY (rol_id) REFERENCES 20_rol(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_usuarios_has_productos(
	usuarios_id INT,
    productos_id INT,
    CONSTRAINT FOREIGN KEY (usuarios_id) REFERENCES 20_usuarios(id),
    CONSTRAINT FOREIGN KEY (productos_id) REFERENCES 20_productos(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_animales(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(20) NOT NULL,
    edad INT NOT NULL,
    fecha_nacimiento DATE,
    fecha_entrada DATE NOT NULL,
    estado_id INT,
    usuarios_id INT,
    tamanio_id INT,
    sexo_id INT,
    tipo_id INT,
    descripcion TEXT,
    CONSTRAINT FOREIGN KEY (estado_id) REFERENCES 20_estado(id),
    CONSTRAINT FOREIGN KEY (usuarios_id) REFERENCES 20_usuarios(id),
    CONSTRAINT FOREIGN KEY (tamanio_id) REFERENCES 20_tamanio(id),
    CONSTRAINT FOREIGN KEY (sexo_id) REFERENCES 20_sexo(id),
    CONSTRAINT FOREIGN KEY (tipo_id) REFERENCES 20_tipo(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_donativos(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    fecha DATE NOT NULL,
    cantidad DECIMAL(4,2) NOT NULL,
    usuarios_id INT,
    CONSTRAINT FOREIGN KEY (usuarios_id) REFERENCES 20_usuarios(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_post(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    fecha DATE NOT NULL,
    contenido LONGTEXT NOT NULL,
    usuarios_id INT,
    CONSTRAINT FOREIGN KEY (usuarios_id) REFERENCES 20_usuarios(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_imagenesAnimales (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ruta VARCHAR(30) NOT NULL, 
    animales_id INT,
    CONSTRAINT FOREIGN KEY (animales_id) REFERENCES 20_animales(id)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 20_imagenesTienda (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    ruta VARCHAR(30) NOT NULL, 
    productos_id INT,
    CONSTRAINT FOREIGN KEY (productos_id) REFERENCES 20_productos(id)
)ENGINE = InnoDB;

INSERT INTO 20_rol (id, nombre) VALUES 
	(1, 'Users'), 
	(2, 'Admin'), 
	(3, 'Voluntarios');
    
INSERT INTO 20_productos (id, nombre, precio, stock, descripcion) VALUES 
	(1, 'TRUE ORIGINS ADULT PURE POLLO', 49.95, 11, "Pienso para perros adultos 12kg"),
    (2, 'ROYAL CANIN GASTROINTESTINAL', 38.30, 24, "Lata para perros 12x410g"),
    (3, 'YES!PH CHAMPÚ ARGÁN', 7.99, 8, "Champú para perros 250ml"),
    (4, 'NAYECO EASY WALK ARNÉS', 11.99, 18, "Arnés de pectoral negro para perros"),
    (5, 'DOGZZZ FLUFFY CAMA GRIS', 19.95, 34, "Tamaño mediano"),
    (6, 'GUAU CHRISTMAS ERIZO', 8.99, 7, "Peluche de erizo para perros"),
    (7, 'TRUE ORIGINS ADULT STERILISED', 18.95, 11, "Pienso de pollo para gatos 2kg"),
    (8, 'NATH MALTA CON OMEGA 3 Y 6', 6.99, 24, "Malta para gatos 100g"),
    (9, 'TK-PET MINERVA BANDEJA SANITA', 20.00, 8, "Arenero para gatos 54 x 39 x 40 cm"),
    (10, 'CATSHION POLE RASCADOR GRIS', 15.99, 18, "Rascador gris para gatos MAXI"),
    (11, 'SMALL LIFE COMIDA CANARIO', 3.50, 34, "Comida para canarios 1kg"),
    (12, 'HOME FRIENDS HENO REOEDORES', 4.79, 7, "Heno de manzanilla 500g"),
    (13, 'OUTECH OASIS TOLVA BEIGE', 15.99, 7, "Comedero para perros y gatos 4L"),
    (14, 'TRUE ORIGINS PURE SALMÓN', 6.95, 7, "Barritas para perros 300g"),
    (15, 'FURMINATOR PARA GATOS', 24.69, 7, "Cepillo para gatos de pelo corto");
    
INSERT INTO 20_sexo (id, tipo) VALUES 
	(1, 'Macho'),
    (2, 'Hembra');

INSERT INTO 20_tamanio(id, nombre) VALUES 
	(1, 'Pequeño'),
    (2, 'Mediano'),
    (3, 'Grande');
    
INSERT INTO 20_tipo (id, nombre) VALUES 
	(1, 'Perro'),
    (2, 'Gato'),
    (3, 'Otros');
    
INSERT INTO 20_estado (id, nombre) VALUES 
	(1, 'En adopción'),
    (2, 'Adoptado'),
    (3, 'En acogida'),
    (4, 'Reservado'),
    (5, 'Apadrina'),
	(6, 'Adopción Urgente'),
    (7, 'Adopción conjunta');
    
INSERT INTO 20_raza (id, nombre, tipo_id) VALUES 
	(1, 'Mestizo', 1),
    (2, 'Perro de Aguas Espanol', 1),
    (3, 'Pitbull', 1),
    (4, 'Galgo', 1),
    (5, 'Pastor Alemán', 1),
    (6, 'Boxer', 1),
    (7, 'American Standford', 1),
    (8, 'Callejero', 2),
    (9, 'Tricolor', 2),
    (10, 'British Shorthair', 2),
    (11, 'Negro', 2),
    (12, 'Persa', 2),
    (13, 'Rex Alemán', 2),
    (14, 'Siamés', 2),
    (15, 'Conejo', 3),
    (16, 'Hamster', 3),
    (17, 'Cobaya', 3),
    (18, 'Canario', 3),
    (19, 'Tortuga', 3),
    (20, 'Burro', 3),
    (21, 'Caballo', 3);

INSERT INTO 20_usuarios (id, nombre, apellidos, telefono, email, contrasenia, fecha, dni, rol_id) VALUES 
	(1, 'Eugenia', 'Ramos Santos', '666777888', 'maeurasa@gmail.com', '123456', '2022-06-01', '12345678M', 2),
	(2, 'Andrea', 'Meléndez Rodríguez', '666999111', 'anmelro@gmail.com', '123456','2022-06-01', '23456789B', 2),
	(3, 'Bruno', 'Pincas Roura', '666111222', 'brupinrou@gmail.com', '123456','2022-07-26', '34567890T', 3),
	(4, 'Daniel', 'Mamblona Encabo', '666222333', 'damanen@gmail.com', '123456','2022-07-31', '45678901Q', 1),
	(5, 'Sergio', 'Fontán Llamas', '666333444', 'serfonlla@gmail.com', '123456','2022-08-02', '56789012P', 3),
	(6, 'Carlos', 'Rufiangel García', '666444555', 'carrugar@gmail.com', '123456','2022-09-13', '67890123R', 1),
	(7, 'Raquel', 'Rodríguez Camargo', '666555666', 'raroca@gmail.com', '123456','2022-09-27', '78901234F', 1),
	(8, 'Diana', 'Izquierdo Castillo', '666666777', 'diizca@gmail.com', '123456','2022-10-06', '89012345X', 3),
	(9, 'Antonio', 'Carmona Sánchez', '677766888', 'ancasa@gmail.com', '123456','2022-11-17', '90123456V', 1),
	(10, 'Lucía', 'García García', '668886999', 'lugaga@gmail.com', '123456','2022-11-30', '01234567K', 1);

INSERT INTO 20_animales (id, nombre, edad, fecha_nacimiento, fecha_entrada, estado_id, usuarios_id, tamanio_id, sexo_id, tipo_id, descripcion) VALUES 
	(1, 'ZHIVAGO', 3, '2020-02-06', '2022-05-13', 1, null, 3, 1, 1,'ZHIVAGO es un perro inteligente y despierto. Se adapta con increíble
	facilidad a nuevas personas y entornos. Tiene todo lo mejor de la
	personalidad de los de su raza. Es cariñoso y muy agradecido.
	Sus papis de acogida se lo pasan en grande con él y con las parrafadas que tienen juntos. Le
	tienen muy mimado y él esta encantado de vivir con ellos. A Zhivago le encanta el agua, si le
	dejáramos podría vivir dentro de una piscina. Y a guapo, como podéis observar, no le gana
	nadie.'),
    (2, 'MUSTANG', 1, null, '2023-04-30', 1, null, 3, 1, 1, 'MUSTANG es este peludo gigantón, y todo lo que tiene de grande
	lo tiene de entrañable y cariñoso. Le encanta disfrutar de los mimos
	que los voluntari@s le dan a diario y le encanta salir de paseo.
	Mustang convive perfectamente con otros perros y es sumiso en el trato cuando se encuentra con perros que tienen una personalidad 
	más fuerte que la suya. Se adapta con rapidez a nuevos entornos y estamos seguros de que cuando pase a una casa no dejará indiferente 
	a nadie, porque es un perro educado en el trato y con una sensibilidad muy especial.'),
    (3, 'BATUECA', 4, null, '2021-05-17', 1, null, 3, 2, 1, 'BATUECA es una perra con un pasado muy triste que marcó
	su personalidad para siempre. La rescatamos junto a otros 20
	miembros de su extensa familia hace ya casi 3 años, pero nos
	ha llevado mucho tiempo y esfuerzo llegar hasta donde estamos.
	Ella es la única de aquel amplio grupo familiar que queda todavía
	por adoptarse.
	Batueca pasó meses en el albergue trabajando con unas compañeras y un adiestrador en positivo, ayudándola a gestionar sus miedos de la mejor manera posible, pero los avances eran lentos. La desconfianza de Batueca hacia las personas era impresionante y nos tenía pavor.
	Con mucha paciencia fuimos viendo pequeños pasitos muy positivos, pero necesitábamos sacarla del albergue y llevarla a una casa de acogida para poder seguir avanzando.
	Les pedimos ayuda a Marina, Alejandro y el resto de su familia, les expusimos el difícil reto que teníamos por delante, esperando un no por respuesta como hubiera sido lo normal, y sin embargo no lo dudaron un segundo y nos abrieron las puertas de su casa para llevar a Batueca allí y poder seguir con su evolución.
	No nos lo creíamos, vimos el cielo abierto.
	Ha pasado un año desde entonces, ha habido momentos muy duros y complicados en la evolución de Batueca, algunos pasitos para delante, y muchos otros para detrás, frustración, tristeza, euforia y esperanza … un sinfín de sentimientos de todo tipo, no os vamos a engañar, pero esta perra tan especial se fue acogida a una familia muy especial que lo ha dado todo … y ya llevamos muchos meses viendo una evolución extraordinaria en ella.
	Batueca siempre será algo desconfiada y asustadiza, sobre todo en entornos nuevos. Siempre necesitará de empatía, paciencia y mucho cariño para ayudarle a seguir creciendo, pero verla disfrutar de la vida es tan gratificante, que seguro que el esfuerzo compensará con creces añadirla a la familia de por vida.'),
	(4, 'VERA', 13, '2010-02-11', '2021-08-18', 4, 5, 3, 2, 1, 'VERA es una adorable abuelita que se encuentra muy en forma
	para su edad. En casa se comporta de maravilla y se adapta con
	mucha facilidad a nuevas rutinas. Convive perfectamente con otros
	perros, aunque su mami de acogida nos dice que le gusta ser el
	centro de atención de la casa.
	Y lo entendemos, ya tiene edad para llevarse todos los mimos y caricias, la edad otorga unos privilegios.
	Vera es super cariñosa con las personas, le encanta estar pegada a ti, dormir contigo y le apasiona comer, si son cosas ricas y no solo bolitas secas de pienso, más todavía. Y una vez estamos de acuerdo y la colmamos de los caprichos que se ha ganado y se merece.
	Vera es una entrañable abuela a la que le quedan aún muchas ganas de disfrutar de lo que la vida le puede ofrecer.'),
    (5, 'SHEILA', 4, '2019-04-06', '2021-12-24', 1, null, 2, 2, 1, 'SHEILA es una perrita muy especial, tierna como ella sola, agradecida
	como la que más, dulce como la miel. A menudo nos leeréis diciendo
	que este u otro perrillo son especiales… Pero es porque de verdad lo
	son.
	Tantos animales especiales se cruzan en nuestras vidas, que nos parece un sueño y una fortuna el poder disfrutar de un tiempo con ellos. Y este es el caso de Sheila.
	Su familia de acogida esta encantada con ella, dicen que es lo MÁS.
	Convive perfectamente con otros perros, aunque su interacción esta más centrada en el ser humano que en los de su especie.
	Tranquila y limpia en casa. Va de maravilla en los paseos. Aprende con rapidez… ¿Qué mas se puede pedir? ¡Pues nada! Eso es justo lo que creemos nosotros, que Sheila ya lo tiene todo.'),
    (6, 'TOPO', 1, null, '2023-01-09', 1, null, 1, 1, 1, 'TOPO ¿Qué por qué se llama así? Haced una búsqueda en
	internet... ¿A qué es su doble? Un pequeñajo entrañable, con
	personalidad, dinámico y activo, con las cosas claras en la vida,
	¡todo un personajillo!
	Topo no empezó con buen pie con el ser humano, y no por culpa suya ni mucho menos, pero hace meses que su vida dio un cambio de 360 grados, afortunadamente.
	Desde que le rescatamos Topo ha conocido solo la cara más amable de las personas y su inseguridad y desconfianza han desaparecido. Ahora es un perro alegre y feliz, que se relaciona muy bien con otros perros y que sabe disfrutar de su día a día como ninguno.
	Un canijito adorable que espera su segunda oportunidad, un hogar donde le quieran de verdad, ¡y para siempre!'),
    (7, 'GRISETA', 1, '2022-07-22', '2022-01-16', 6, null, 3, 2, 1, 'GRISETA fue rescatada en Ávila donde vivía asalvajada en el campo
	desde que era cachorra y sin los cuidados adecuados.
	Las primeras semanas era tímida y desconfiada, pero ha avanzado de manera sorprendente y ahora se muestra cariñosa, alegre y feliz cuando nos tiene cerca. Aún le queda ganar confianza en el ser humano, pero vamos por buen camino.
	Griseta es una perra muy sociable y juguetona con otros perros, estar rodeada de los de su especie la da seguridad.'),
    (8, 'MINT', 1, '2022-06-16', '2022-02-01', 1, null, 3, 1, 1, 'MINT es un precioso adolescente de ojos verdes. Cariñoso y
	simpático con las personas. Convive perfectamente con otros
	perros y es un perrito 10 en casa. Se adapta con facilidad a
	nuevos entornos y ya ha estado acogido, por lo que esta super
	acostumbrado a la rutina con las personas.
	Mint pasea con tranquilidad, es limpio y muy despierto y obediente.
	Con otros perros es un amor, se lleva bien con tod@s y hace pandilla con una facilidad impresionante. Dulce y tierno como ninguno.
	Por eso no entendemos que aún no haya una familia que se haya enamorado de él y llevado para siempre a casa. Quizás porque estaba esperándote a ti.'),
    (9, 'CUARZO', 1, null, '2022-09-07', 2, 2, 3, 1, 1, 'CUARZO es un adorable cruce de mastín de 50 kilos de peso. Es
	de talla extra grande, pero todo lo que tiene de grande lo tiene de
	noble, tierno y bueno.
	Ahora mismo CUARZO está acogido con Carmen y su familia y convive perfectamente con otros perros y con un adorable gatito. Es un perro de personalidad abierta, tranquilo y muy cariñoso.
	Extra sociable con otros animales y por supuesto con las personas.
	¡Uno de esos animales especiales que nunca se olvidan una vez que los conoces!'),
    (10, 'FRAMBUESA', 4, '2019-01-03', '2023-05-20', 1, null, 3, 2, 1, 'FRAMBUESA no ha tenido una vida fácil, ni un pasado dulce,
	pero a pesar de ello es una perra increíblemente noble y dócil
	con las personas. Aprende pronto y se adapta con facilidad a
	nuevos entornos.
	FRAMBUESA es muy sociable con otros perros y se porta de maravilla en casa, una vez adaptada.
	Sus papis de acogida nos cuentan que están encantados con ella, que la dan un 10 sobre 10.
	Puede convivir con otros perros sin problema, y estamos seguros de que también se adaptaría a los gatitos si se diera el caso.
	Una adorable perrina que no defrauda a nadie que la conoce.'),
    (11, 'CINCO', 2, null, '2023-05-13', 1, null, 2, 1, 2, 'CINCO se ha pasado los primeros meses en la protectora prácticamente escondido de los humanos. Pocas veces se dejaba ver de ahí que no hayamos podido difundirle en condiciones hasta ahora,
	Ya parece que va confiando un poco y se tumba fuera en la gatera junto a sus compis a tomar el sol o echarse una siesta, pero aún le cuesta interactuar con nosotros.
	Es un gatito precioso que se lleva bien con el resto de los gatos del albergue pero con el humano todavía se muestra esquivo.
	Necesita alguien con paciencia, que entienda un poco de gatos, le de su espacio y su tiempo.'),
    (12, 'TOMY', 1, null, '2023-04-30', 1, null, 2, 1, 2, 'Cuando TOMY llegó al albergue pensamos que era un gato feral, algo "salvajillo" y de complicada adopción pues este tipo de gatos pocas veces se adaptan a un hogar.
	Le encontramos una casa de acogida y para nuestra sorpresa ha cambiado bastante :).
	Necesita un humano / familia que entienda un poco de gatos, que sepa darle su espacio, pues es un gato maravilloso pero independiente que posiblemente nunca será una gato "faldero" de los que se te tumban encima, ni creemos guste mucho demasiada manipulación (que le cojan en brazos, le achuchen etc).
	Sin embargo será un maginifico compañera para otro gato, pues se lleva muy bien con sus congéneres, y por supuesto un gran compañero de vida para aquella persona que simplemente quiera darle cariño, respeto y un hogar cálido y estable.'),
    (13, 'BIMBO Y BALÚ', 3, null, '2023-05-17', 7, null, 2, 1, 2, 'BIMBO era un gato habitual de una colonia en Madrid, y en la tormenta Filomena desapareció por unos meses.
	Cuando volvió a la colonia vino con su amigo inseparable BALÚ y desde entonces siempre están juntos.
	Son muy buenos y nobles. Los dos son cariñosos pero a su manera. Balú lo es desde el minuto uno que llega a una nueva casa, pero a Bimbo le cuesta coger confianza y es mas tímido, pero cuando la coge es igual de cariñoso que Balú.
	Han pasado ya por varias casas de acogida y buscan un hogar que les quiera para siempre.
	Son positivos en inmuno y están bien de salud. A Balú le faltan algunas piezas dentales.'),
    (14, 'LIMA', 1, null, '2022-08-18', 1, null, 2, 2, 2, 'LIMA es una gatita maravillosa que fue rescatada de la calle. LLeva desde entonces en una casa de acogida donde le han tratado de un carcinoma en una orejita (de ahí que le falte un trozo).
	Nos dicen que es un absoluto bombón. Muy cariñosa, buena, tranquila y juguetona.
	No está testada con otros gatos ni con perros pero por su carácter y los protocolos de presentación correctos, seguramente no tendría problema de convivencia.
	Para Lima preferimos un hogar donde pueda estar protegida del sol (sin jardín ni terraza).'),
    (15, 'PIRAÑA', 2, null, '2022-12-24', 1, null, 2, 2, 2, 'PIRAÑA es una gata preciosa que vivía feliz con su humano, hasta que el hombre falleció y ella terminó en la calle.
	Una buena mujer la estuvo alimentando, y en cuanto tuvimos hueco para ella vino al albergue.
	A priori se llev bien con otros gatos y es muy muy cariñosa con la gente.
	Todavía se muestra tímida e insegura, la pobre está bastante desubicada, pero en un hogar estamos seguros de que se convertirá en todo un bombonazo.'),
    (16, 'TITA', 3, null, '2023-01-09', 1, null, 2, 2, 2, 'A TITA la encontraron en la calle, herida. Tenía la mandíbula inferior rota, lo más probable que por una patada. 
    Ya la han operado y se ha recuperado muy bien. A pesar de todo es tremendamente cariñosa. Se entregará con el protocolo veterinario completo.'),
    (17, 'TRUENO', 1, null, '2022-01-16', 1, null, 2, 1, 2, 'TRUENO es un precioso gato joven negro.
	No he tenido mucha suerte hasta ahora. Me encontraron cerca de un patio al que iban los niñosy allí me pegaban.
	Ahora estoy en una estupenda casa de acogida. Pero busco un hogar en el que me quieran y pueda vivir feliz. Soy muy bueno y muy cariñoso.
	He dado positivo en Inmuno, pero eso no me impide hacer una vida totalmente normal.'),
    (18, 'KENY', 1, null, '2023-02-01', 1, null, 2, 1, 2, 'KENY. La pasada primavera nos llegó el aviso de un gato que llevaba varios días en La Fortuna con el fémur roto.
	Algunos testigos decían que había caído desde una ventana aunque no se sabe si fue así como sucedió.
	Nadie le había reclamado ni tenía chip, por lo que le sacamos de allí en cuando pudimos y le trasladamos al hospital. Pasó por dos operaciones ya que el veterinario quería asegurarse de un "acabado" perfecto. Por suerte así fue y se recuperó por completo.
	Pasó por una acogida mientras se recuperaba, después estuvo en el albergue unas semanas más hasta que apareció un adoptante potencial, quien inicialmente firmó otra acogida para pasar a posterior adopción definitiva.
	Por desgracia la convivencia con la gata de esa casa era imposible asi que volvió a la Protectora donde no lo está pasando muy bien.
	Keny es un gatito tímido pero manipulable, sociable con la gente y cariñoso. Necesita un hogar donde le entiendan y le den un poquito de tiempo para adaptarse y abrirse (preferiblemente alguien con experiencia previa). Mejor si es "hijo único" pues aunque en la gatera no parece tener problemas con el resto, no queremos arriesgarnos a que se vaya adoptado con otro gato o gata y sea devuelto otra vez.'),
    (19, 'LIA', 3, null, '2021-09-07', 2, null, 2, 2, 2, 'A esta preciosa la hemos llamado LIA.
	Es una gata muy cariñosa con las personas; enseguida coge confianza con todos, se sube al sillón donde estén y se tumba panza arriba buscando caricias.
	También le encanta vivir con otros gatos, ella es el centro de las carreras y la encontramos casi siempre junto a los demás, lavándose, «peleando», compartiendo el sueño. Por eso queremos que siga viviendo con otros gatos.
	Se entregará en adopción con el protocolo veterinario acorde a su edad.'),
    (20, 'TIGRI Y MURZI', 2, null, '2022-05-20', 7, null, 2, 1, 2, 'TIGRI y MURZI son hermanos inseparables, de los 4 hermanos que nacieron en la misma camada, estos son los que desde que nacieron han estado juntos y no se han separado en ningún momento, si no se ven se llaman el uno al otro para encontrarse.
	Muy cariñosos y juguetones, no paran.
	Les encanta echarse unas carreras y les gusta mucho jugar con el puntero laser.
	Cuando acaban de jugar se acurrucan a tu lado para dormir y coger fuerzas para el siguiente juego
	Se entregarán en adopción con el protocolo veterinario acorde a su edad.'),
    (21, 'CANELA', 3, '2020-02-06', '2022-05-13', 5, null, 3, 2, 3, 'CANELA, rescatada junto a 17 caballos más del maltratador de Arbucies, tuvo una grave endocarditis debido a la abundancia de parásitos en el corazón, ahora está sana.'),
    (22, 'JOY', 2, null, '2023-04-30', 1, null, 1, 1, 3, 'JOY llegó a La Madriguera junto con otros cinco conejos más, todos ellos procedentes de un criadero de animales donde vivían en condiciones muy precarias. Vivía en una jaula minúscula y no conocía lo que se siente al recibir la luz natural del sol o disfrutar de dar unos saltos. Ha tenido una vida difícil, pero a partir de ahora todo será bueno.
	Joy es cotilla y atrevido, se ha adaptado rápido a vivir en una casa. Es muy bueno y limpio. Le encanta estar en la misma estancia que estés tú. No le tiene miedo ni a perros, ni a gatos, ni humanos. Aún no le gusta mucho que le cepillen o le toquen. Da muchos saltitos de alegría y, cuando le toca la hora de la comida, corre que se las pela a su comedero. Es muy simpático y un poco sinvergüenza.
	Ayúdanos a mostrarle a Joy la parte bonita de la vida'),
    (23, 'PEGGY', 1, null, '2023-05-17', 5, null, 3, 2, 3, 'PEGGY es un poquito tímida. Es más tranquila que sus hermanas. Disfruta tumbada dentro de su box camuflada entre la paja.
	Se deja acariciar, pero antes necesita que le ofrezcas un ratito tranquilo y darle un par de uvas o de fresas ¡le vuelven loca!'),
    (24, 'ROJITO Y COLORAO', 1, null, '2022-08-18', 1, null, 3, 1, 3, 'ROJITO y COLORAO son dos canarios inseparables, cariñosos entre ellos y simpáticos. Rojito es un chico que tiende a ponerse gordete, pero con un buen espacio donde pueda hacer ejercicio, eso no será problema alguno.
	No son picones, pero la gente les da un poquito de susto, tienen una edad pero todavía les queda muchísimo que ofrecer.
	Buscamos un adoptante genial, que le encanten los canarios dándose besitos todo el rato, con una casa tranquila y muchas ganas de que Rojito, Colorao y su historia de amor sean felices para siempre.'),
    (25, 'PLATERO', 2, '2021-04-06', '2022-12-24', 5, null, 2, 1, 3, 'PLATERO fue rescatado en Alicante de un tratante sin escrúpulos que le tenía en unas condiciones terribles de higiene y malnutrición. 
    Cuando le rescatamos, sus cascos estaban tan mal que necesitó tratamientos urgentes y quedarse tres meses recibiendo cuidados hasta que pudimos trasladarle a su residencia definitiva en nuestro 
    refugio. Ahora es un burrito muy feliz y uno de los más bonitos del lugar.');
    
INSERT INTO 20_donativos (id, fecha, cantidad, usuarios_id) VALUES 
	(1, '2022-12-01', 10, 2),
    (2, '2022-09-23', 3.50, 5),
    (3, '2022-09-20', 5, 1),
    (4, '2022-08-29', 15.50, 3),
    (5, '2022-08-03', 2, 8);

INSERT INTO 20_post (id, fecha, contenido, usuarios_id) VALUES 
	(1, '2022-07-31', 'Hola! Me gustaría saber si los visitas van con cita previa, muchas gracias!', 4),
    (2, '2022-08-01', 'Buenas tardes Daniel, así es, es necesario agendar la visita en nuestro calendario.', 2),
    (3, '2022-09-30', 'hola soy raquel, alguien sabría decirme si es mejor pienso seco o húmedo para mi gato? muchas gracias', 7),
    (4, '2022-10-02', 'Buenas raquel! yo tengo un gato esterilizado y el pienso seco le va muy bien, pero deberias consultarlo con tu veterinario en caso de duda!', 3),
    (5, '2022-10-03', 'tengo una pastor alemán y no sé si cogerle la talla L o XL, que debería hacer?', 6),
    (6, '2022-10-06', 'hola carlos soy diana, mi recomendación es que lleves a tu perrita a la tienda y le pruebes las distintas tallas para asegurarte', 8),
    (7, '2022-10-12', 'otra opción es medir a tu perro y guiarte por las medidas que aparecen debajo de cada talla jajaja', 4);

INSERT INTO 20_imagenesAnimales (id, ruta, animales_id) VALUES 
	(1, 'a2.jpg', 1),
    (2, 'a21.jpg', 1),
    (3, 'a22.jpg', 1),
    (4, 'a6.jpg', 2),
    (5, 'a61.jpg', 2),
    (6, 'a62.jpg', 2),
    (7, 'a1.jpg', 3),
    (8, 'a11.jpg', 3),
    (9, 'a12.jpg', 3),
    (10, 'a3.jpg', 4),
    (11, 'a31.jpg', 4),
    (12, 'a32.jpg', 4),
    (13, 'a4.jpg', 5),
    (14, 'a41.jpg', 5),
    (15, 'a42.jpg', 5),
    (16, 'a5.jpg', 6),
    (17, 'a51.jpg', 6),
    (18, 'a52.jpg', 6),
    (19, 'a8.jpg', 7),
    (20, 'a81.jpg', 7),
    (21, 'a82.jpg', 7),
    (22, 'a7.jpg', 8),
    (23, 'a71.jpg', 8),
    (24, 'a72.jpg', 8),
    (25, 'a10.jpg', 9),
    (26, 'a110.jpg', 9),
    (27, 'a1110.jpg', 9),
    (28, 'a9.jpg', 10),
    (29, 'a91.jpg', 10),
    (30, 'a92.jpg', 10),
    (31, 'b1.jpg', 11),
    (32, 'b2.jpeg', 12),
    (33, 'a3.jpg', 13),
    (34, 'b3.jpg', 14),
    (35, 'b4.jpg', 15),
    (36, 'b5.jpg', 16),
    (37, 'b7.jpg', 17),
    (38, 'b8.jpeg', 18),
    (39, 'b9.jpg', 19),
    (40, 'b6.jpg', 20),
    (41, 'c1.jpg', 21),
    (42, 'c2.webp', 22),
    (43, 'c3.jpg', 23),
    (44, 'c4.jpg', 24),
    (45, 'c5.jpg', 25);

INSERT INTO 20_imagenesTienda (id, ruta, productos_id) VALUES 
	(1, 't1.jpg', 1),
    (2, 't2.jpg', 2),
    (3, 't3.jpg', 3),
    (4, 't4.jpg', 4),
    (5, 't5.jpg', 5),
    (6, 't6jpg.jpg', 6),
    (7, 't7.jpg', 7),
    (8, 't8.jpg', 8),
    (9, 't9.jpg', 9),
    (10, 't10.jpg', 10),
    (11, 't11.jpg', 11),
    (12, 't12.jpg', 12),
    (13, 't13.jpg', 13),
    (14, 't14.jpg', 14),
    (15, 't15.jpg', 15);