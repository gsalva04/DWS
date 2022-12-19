CREATE DATABASE Cartelera;

USE Cartelera;

CREATE TABLE T_Categoria(
	id_Categoria int NOT NULL AUTO_INCREMENT,
    categoria varchar(50) DEFAULT NULL,
	PRIMARY KEY (id_Categoria)
);

CREATE TABLE T_Peliculas(
	id_Pelicula int NOT NULL AUTO_INCREMENT,
    titulo varchar(200) DEFAULT NULL,
    año int DEFAULT NULL,
    duracion int DEFAULT NULL,
    sinopsis varchar(500) DEFAULT NULL,
    imagen varchar(100) DEFAULT NULL,
    votos int DEFAULT 0,
    id_Categoria int DEFAULT NULL,
    PRIMARY KEY (id_Pelicula),
    CONSTRAINT T_Peliculas_ibfk_1 FOREIGN KEY (id_Categoria) REFERENCES T_Categoria (id_Categoria)
);

CREATE TABLE T_Directores(
	id_Director int NOT NULL AUTO_INCREMENT,
    director varchar(50) DEFAULT NULL,
    PRIMARY KEY (Id_director)
);

CREATE TABLE T_Peliculas_Directores(
	id_PeliDirect int NOT NULL AUTO_INCREMENT,
	id_Director int NOT NULL,
	id_Pelicula int NOT NULL,
	PRIMARY KEY (id_PeliDirect),
    FOREIGN KEY (id_Director) REFERENCES T_Directores (id_Director),
    FOREIGN KEY (id_Pelicula) REFERENCES T_Peliculas (id_Pelicula)
);

CREATE TABLE T_Actores(
	id_Actor int NOT NULL AUTO_INCREMENT,
    actor varchar(100) DEFAULT NULL,
	PRIMARY KEY (id_Actor)
);

CREATE TABLE T_Peliculas_Actores(
	id_PeliAct int NOT NULL AUTO_INCREMENT,
	id_Actor int NOT NULL,
	id_pelicula int NOT NULL,
	PRIMARY KEY (id_PeliAct),
    FOREIGN KEY (id_Actor) REFERENCES T_Actores (id_Actor),
    FOREIGN KEY (id_pelicula) REFERENCES T_Peliculas (id_Pelicula)
);

/*CATEGORIA Terror*/
USE Cartelera;
INSERT INTO T_Categoria (id_Categoria, categoria)
VALUES (1, 'Terror');

/*PELICULAS Terror*/
USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (6, 'Veronica', 2017, 105, 'Inspirada en el único caso en la historia que la policía española clasifica como sobrenatural y queda sin resolver hasta la fecha. Durante un eclipse total de sol, Verónica y dos amigas deciden hacer una ouija para invocar el espíritu de su padre. Después de romperse la ouija, Verónica entra en una especie de trance y se desmaya ante el pavor de sus amigos. Una vez recuperada, empieza a percibir cosas extrañas en su hogar que le hacen pensar que trajo a su padre de vuelta al mundo de los vivos.', 'img/caratulas/terror/veronica.jpg', '0', '1'); 

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (7, 'It', 2017, 135, 'Cuando empiezan a desaparecer niños en el pueblo de Derry (Maine), un pandilla de amigos lidia con sus mayores miedos al enfrentarse a un malvado payaso llamado Pennywise, cuya historia de asesinatos y violencia data de siglos. Adaptación cinematográfica de la conocida novela de Stephen King "It".', 'img/caratulas/terror/it.jpg', '0', '1');

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (8, 'La abuela', '2021', '100', 'Susana (Almudena Amor) tiene que dejar su vida en París, donde trabaja como modelo, para regresar a Madrid, debido a que su abuela Pilar (Vera Valdez) acaba de sufrir un derrame cerebral. Años atrás, cuando los padres de Susana murieron, su abuela la crió como si fuese su propia hija. Susana necesita encontrar a alguien que cuide de Pilar, pero lo que deberían ser solo unos días con su abuela se acabarán convirtiendo en una terrorífica pesadilla. ', 'img/caratulas/terror/laAbuela.jpg', '0', '1');

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES(9, 'Tiempo', '2021', '113', 'Una familia pone rumbo a una remota y paradisiaca playa para pasar un día de vacaciones. El lugar se encuentra en un recóndito paraje y esconde algo que está a punto de cambiarle la vida a todos y cada uno de los presentes. A medida que pasan las horas, cada uno de ellos irá envejeciendo más y más, hasta el punto de que su vida se verá reducida a ese día.', 'img/caratulas/terror/tiempo.jpg',0, 1);

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES(10, 'La Purga', '2013', '86', ' En una futura sociedad distópica, el régimen político, llamado Nueva Fundación de los padres de América, ha implantado una medida catárquica ante la violencia campante y las cárceles saturadas: la "purga anual", según la cual una noche al año se puede cometer cualquier clase de crimen, incluso el asesinato, sin tener que responder ante la justicia. La violencia se desata durante esas 12 horas, y los individuos se desfogan, imperando la calma el resto del año.', 'img/caratulas/terror/laPurga.jpg', 0,1);

/*CATEGORIA Thriller*/
USE Cartelera;
INSERT INTO T_Categoria (id_Categoria, categoria)
VALUES (2, 'Thriller');

/*PELICULAS Thriller*/
USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (1, 'Bajo Cero', 2021, 106, 'En una fría noche cerrada de invierno, en mitad de una carretera despoblada, un furgón policial blindado es asaltado durante un traslado de presos. Alguien busca a alguien de su interior. Martín, el policía conductor del furgón, consigue atrincherarse dentro del cubículo blindado con los reclusos. Obligado a entenderse con sus enemigos naturales, Martín tratará de sobrevivir y cumplir con su deber en una larga noche de pesadilla en el que se pondrán a prueba incluso sus principios.', "img/caratulas/thriller/bajoCero.jpeg", 0, 2);

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (2, 'Efecto Mariposa', 2004, 101, 'Evan Treborn, un joven que se está esforzando por superar unos dolorosos recuerdos de su infancia, descubre una técnica que le permite viajar atrás en el tiempo y ocupar su cuerpo de niño para poder cambiar el curso de su dolorosa historia. Sin embargo también descubre que cualquier mínimo cambio en el pasado altera enormemente su futuro.', "img/caratulas/thriller/efectoMariposa.jpeg", '0', '2');

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (3, 'Hasta el cielo', '2020', '121', 'El día que Ángel habló con Estrella en aquella discoteca, su vida cambió para siempre. Tras una pelea con Poli, el posesivo novio de la chica, éste le anima a unirse a su banda de atracadores de Madrid. Ángel comienza a escalar rápidamente en una pirámide de atracos, dinero negro, negocios turbios y abogados corruptos que le llevarán a ser acorralado por Duque, un incansable detective. Desoyendo los consejos de su gente, Ángel se convierte en el protegido de Rogelio.', 'img/caratulas/thriller/hastaElCielo.jpeg', '0', '2');

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (4, 'Soy leyenda', 2007, 100, 'Robert Neville es el último hombre vivo que hay sobre la Tierra, pero no está solo. Los demás seres humanos se han convertido en vampiros y todos ansían beber su sangre. Durante el día vive en estado de alerta, como un cazador, y busca a los muertos vivientes mientras duermen; pero durante la noche debe esconderse de ellos y esperar el amanecer. Esta pesadilla empezó hace tres años: Neville era un brillante científico, pero no pudo impedir la expansión de un terrible virus creado por el hombre.', 'img/caratulas/thriller/soyLeyenda.jpeg', '0', '2');

USE Cartelera;
INSERT INTO T_Peliculas (id_Pelicula, titulo, año, duracion, sinopsis, imagen, votos, id_Categoria)
VALUES (5, 'Interstellar', 2004, 169, 'Al ver que la vida en la Tierra está llegando a su fin, un grupo de exploradores dirigidos por el piloto Cooper (McConaughey) y la científica Amelia (Hathaway) emprende una misión que puede ser la más importante de la historia de la humanidad: viajar más allá de nuestra galaxia para descubrir algún planeta en otra que pueda garantizar el futuro de la raza humana.', 'img/caratulas/thriller/interstellar.jpg', '0', '2');

/*DIRECTORES (THRILLER)*/

USE Cartelera; 
INSERT INTO T_Directores (id_Director, director)
VALUES (1, 'Lluís Quílez'); /*BajoCero*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (2, 'Christopher Nolan'); /*Interstelar*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (3, 'Eric Bress'); /*Efecto Mariposa*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (4, 'Daniel Calparsoro'); /*Hasta el cielo*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (5, 'Francis Lawrence'); /*Soy Leyenda*/

/*DIRECTORES (TERROR)*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (6, 'Andy Muschietti'); /*It*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (7, 'Paco Plaza'); /*La abuela y Veronica*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (8, 'James DeMonaco'); /*La purga*/

USE Cartelera;
INSERT INTO T_Directores (id_Director, director)
VALUES (9, 'M. Night Shyamalan'); /*Tiempo*/

/* ACTORES (THRILLER) */

	/*BajoCero*/
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (1, 'Javier Gutiérrez');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (2, 'Karra Elejalde');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (3, 'Luis Callejo');

	/*Interstellar*/
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (4, 'Matthew McConaughey');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (5, 'Anne Hathaway');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (6, 'David Gyasi');

	/*Efecto Mariposa*/ 
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (7 , 'Ashton Kutcher');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (8, 'Amy Smart');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (9, 'Kevin Schmidt');
	
    /*Hasta el Cielo*/
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (10, 'Miguel Herrán');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (11, 'Carolina Yuste');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (12, 'Luis Tosar');
	
    /*Soy Leyenda*/ 
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (13, 'Will Smith');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (14, 'Alice Braga');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (15, 'Salli Richardson');

/* ACTORES (Terror) */
	/*It*/ 
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (16, 'Bill Skarsgard');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (17, 'Jaeden Martell');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (18, 'Sophia Lillis');
	
    /*La abuela*/
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (19, 'Almudena Amor');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (20, 'Vera Valdez');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (21, 'Karina Kolokolchykova');

	/*Veronica*/ 
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (22, 'Sandra Escacena');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (23, 'Bruna González');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (24, 'Claudia Placer');

	/*La purga*/
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (25, 'Ethan Hawke');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (26, ' Lena Headey');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (27, 'Max Burkholder');

	/*Tiempo*/
USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (28, 'Gael García');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (29, 'Vicky Krieps');

USE Cartelera;
INSERT INTO T_Actores (id_Actor, actor)
VALUES (30, 'Rufus Sewell');


/* INSERT T_Peliculas_Actores (Thriller) */

		/*Bajo Cero*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (1, 1, 1) ;

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (2, 2, 1);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (3, 3, 1);
	
    /*Interstellar*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (4, 4, 5);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (5, 5, 5);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (6, 6, 5);

	/*Efecto Mariposa*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (7, 7, 2);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (8, 8, 2);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (9, 9, 2);

	/*Hasta el cielo*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (10, 10, 3);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (11, 11, 3);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (12, 12, 3);

	/*Soy leyenda*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (13, 13, 4);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (14, 14, 4);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (15, 15, 4);

/* INSERT T_Peliculas_Actores (Terror) */

	/*It*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (16, 16, 7);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (17, 16, 7);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (18, 16, 7);

	/*La abuela*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (19, 19, 8);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (20, 20, 8);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (21, 21, 8);
	
    /*Veronica*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (22, 22, 6);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (23, 23, 6);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (24, 24, 6);

	/*La purga*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (25, 25, 10);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (26, 26, 10);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (27, 27, 10);
	
    /*Tiempo*/
USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (28, 28, 9);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (29, 29, 9);

USE Cartelera;
INSERT INTO T_Peliculas_Actores (id_PeliAct, id_Actor, id_pelicula)
VALUE (30, 30, 9);

/* INSERT T_Peliculas_Directores (Thriller)*/
	
USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (1, 1, 1); /*Bajo Cero*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (2, 2, 5); /*Interstellar*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (3, 3, 2); /*Efecto Mariposa*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (4, 4, 3); /*Hasta el cielo*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (5, 5, 4); /*Soy leyenda*/


/* INSERT T_Peliculas_Directores (Terror)*/
USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (6, 6, 7); /*It*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (7, 7, 8); /*La abuela*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (8, 7, 6); /*Veronica*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (9, 8, 10); /*La purga*/

USE Cartelera;
INSERT INTO T_Peliculas_Directores(id_PeliDirect, id_Director, id_Pelicula)
VALUE (10, 9, 9); /*Tiempo*/






