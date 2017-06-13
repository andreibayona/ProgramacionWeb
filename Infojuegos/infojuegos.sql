/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  andre
 * Created: 1/04/2017
 */

create table categoria(
id_categoria int not null auto_increment primary key,
nombre varchar(40) not null
);

CREATE TABLE juegos(
  id_juego INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(40) NOT NULL,
  portada VARCHAR(200) NOT NULL,
  contenido VARCHAR(1500) NOT NULL,
  fecha DATE NOT NULL,
  imagen VARCHAR(200) NOT NULL,
  video VARCHAR(200) NOT NULL,
  calificacion VARCHAR(40) NOT NULL,
  id_categoria int NOT NULL,
  precio int not null,
FOREIGN KEY(id_categoria) REFERENCES categoria(id_categoria) ON DELETE CASCADE ON UPDATE CASCADE

);
create table compra(
id_compra int not null AUTO_INCREMENT primary key,
nombre_j VARCHAR(40) not null,
id_juego int not null,
nombre_com VARCHAR(40) not null,
correo_comp VARCHAR(40) not null,
pais_comp VARCHAR(40) not null
);




CREATE TABLE noticias(
  id_noticia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(40) NOT NULL,
  imagen VARCHAR(200) NOT NULL,
  informacion VARCHAR(1500) NOT NULL,
  fecha DATE NOT NULL,
  redactor VARCHAR(40) NOT NULL,
  video VARCHAR(200) NOT NULL
);
CREATE TABLE comentarios(
  id_comentario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  mensaje VARCHAR(40) NOT NULL,
  nombre  VARCHAR(40) NOT NULL,
  fecha date not null,
  idJuego int not null,
    FOREIGN KEY(idJuego) REFERENCES juegos(id_juego) ON DELETE CASCADE ON UPDATE CASCADE

);


CREATE TABLE usuarios(
  id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(40) NOT NULL,
  password VARCHAR(40) NOT NULL,
  Correo VARCHAR(40) NOT NULL,
  pais VARCHAR(40) NOT NULL,
  id_tipo VARCHAR(1) not null
);





CREATE TABLE usuario_pregunta(
  id_uspre INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  id_usuario INT NOT NULL,
  id_comentario INT NOT NULL,
  FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY(id_comentario) REFERENCES comentarios(id_comentario) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE preguntas(
  id_pregunta INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(40) NOT NULL,
  asunto VARCHAR(40) NOT NULL,
  correo VARCHAR(40) NOT NULL,
  mensaje VARCHAR(40) NOT NULL
);
CREATE TABLE pais(
  id_pais INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(40) NOT NULL
);


Insert into usuarios (nombre, password, Correo, pais, id_tipo) values ('andrei', MD5('123'), 'a@a.a', 'colombia', '1');


Insert into categoria (nombre) values ('accion');
Insert into categoria (nombre) values ('aventura');
Insert into categoria (nombre) values ('carreras');
Insert into categoria (nombre) values ('deportes');
Insert into categoria (nombre) values ('estrategia');
Insert into categoria (nombre) values ('simulacion');
Insert into categoria (nombre) values ('terror');
Insert into categoria (nombre) values ('clasicos');

Insert 	into 	pais	 (nombre) 	values 	(  	 'Afganistan'	);
Insert 	into 	pais	 (nombre) 	values 	(  	 'Albania'	);
Insert 	into 	pais	 (nombre) 	values 	(        'Alemania'	);
Insert 	into 	pais	 (nombre) 	values 	(        'Andorra'	);
Insert 	into 	pais	 (nombre) 	values 	(        'Angola'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Antigua y Barbuda'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Arabia Saudita'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Argelia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Argentina'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Armenia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Australia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Austria'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Azerbaiyan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Bahamas'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Banglades'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Barbados'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Barein'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Belgica'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Belice'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Benin'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Bielorrusia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Birmania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Bolivia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Bosnia y Herzegovina'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Botsuana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Brasil'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Brunei'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Bulgaria'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Burkina Faso'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Burundi'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Butan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Cabo Verde'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Camboya'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Camerun'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Canada'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Catar'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Chad'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Chile'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'China'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Chipre'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Ciudad del Vaticano'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Colombia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Comoras'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Corea del Norte'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Corea del Sur'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Costa de Marfil'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Costa Rica'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Croacia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Cuba'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Dinamarca'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Dominica'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Ecuador'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Egipto'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'El Salvador'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Emiratos Arabes Unidos'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Eritrea'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Eslovaquia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Eslovenia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Espana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Estados Unidos'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Estonia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Etiopia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Filipinas'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Finlandia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Fiyi'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Francia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Gabon'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Gambia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Georgia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Ghana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Granada'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Grecia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Guatemala'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Guyana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Guinea'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Guinea ecuatorial'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Guinea-Bisau'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Haiti'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Honduras'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Hungria'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'India'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Indonesia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Irak'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Iran'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Irlanda'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Islandia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Islas Marshall'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Islas Salomon'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Israel'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Italia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Jamaica'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Japon'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Jordania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Kazajistán'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Kenia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Kirguistan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Kiribati'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Kuwait'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Laos'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Lesoto'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Letonia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Libano'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Liberia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Libia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Liechtenstein'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Lituania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Luxemburgo'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Madagascar'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Malasia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Malaui'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Maldivas'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Mali'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Malta'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Marruecos'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Mauricio'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Mauritania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Mexico'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Micronesia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Moldavia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Monaco'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Mongolia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Montenegro'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Mozambique'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Namibia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Nauru'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Nepal'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Nicaragua'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Niger'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Nigeria'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Noruega'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Nueva Zelanda'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Oman'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Paises Bajos'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Pakistan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Palaos'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Panama'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Papua Nueva Guinea'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Paraguay'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Peru'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Polonia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Portugal'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Reino Unido'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica Centroafricana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica Checa'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica de Macedonia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica del Congo'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica Democrática del Congo'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica Dominicana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Republica Sudafricana'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Ruanda'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Rumania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Rusia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Samoa'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'San Cristobal y Nieves'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'San Marino'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'San Vicente y las Granadinas'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Santa Lucia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Santo Tome y Príncipe'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Senegal'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Serbia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Seychelles'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Sierra Leona'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Singapur'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Siria'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Somalia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Sri Lanka'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Suazilandia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Sudan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Sudan del Sur'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Suecia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Suiza'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Surinam'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Tailandia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Tanzania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Tayikistan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Timor Oriental'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Togo'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Tonga'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Trinidad y Tobago'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Tunez'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Turkmenistan'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Turquia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Tuvalu'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Ucrania'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Uganda'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Uruguay'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Uzbekistán'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Vanuatu'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Venezuela'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Vietnam'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Yemen'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Yibuti'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Zambia'	);
Insert 	into 	pais	 (nombre) 	values 	(	 'Zimbabue'	);
