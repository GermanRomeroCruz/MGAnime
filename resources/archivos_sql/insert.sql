use MGAnime;

/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (NOMBRE,PASS,EMAIL,IMAGEN,ROL)
 VALUES
 ('Mayra','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','mayradmt96@gmail.com',null,'ADMIN'),/*1234*/
 ('German','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','germancarab@gmail.com',null,'ADMIN'),/*1234*/
 ('Steven','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','steven.cadena.giler@gmail.com',null,'USER'),/*1234*/
 ('Pablo','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','pablo@gmail.com',null,'USER'),/*1234*/
 ('Soraya','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','soraya@gmail.com',null,'USER'),/*1234*/
 ('Lucia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','lucia@gmail.com',null,'USER'),/*1234*/
 ('Petunia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','petunia@gmail.com',null,'USER'),/*1234*/
 ('Fernando','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','fernando@gmail.com',null,'USER'),/*1234*/
 ('Natalia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','natalia@gmail.com',null,'USER'),/*1234*/
 ('Erick','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','erick@gmail.com',null,'USER'),/*1234*/
 ('Zack','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','zack@gmail.com',null,'USER'),/*1234*/
 ('Leo','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','leo@gmail.com',null,'USER'),/*1234*/
 ('Charlie','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','charlie@gmail.com',null,'USER'),/*1234*/
 ('Alisha','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','alisha@gmail.com',null,'USER'),/*1234*/
 ('Scarlett','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','scarlett@gmail.com',null,'USER');/*1234*/


 INSERT INTO PUBLICACIONES (TITULO, AUTOR,  IMAGEN, DESCRIPCION, CATEGORIA)
 VALUES
 ('Hellsing', 'Oki', null, 'Un vampiro que caza todo','Vampiros'),
 ('Como me reencarne en un slime', null, 'Yuo', 'Alguien muere en nuestro mundo y reencarna en otro como un monstruo','Fantasia'),
 ('Diamond no ace', 'Oitrie', null, 'Un chico de pueblo que se va a otra escuela para jugar al baseball','Deportes'),
 ('Your name', 'Askio', null, 'Los cuerpos de ambos se intercambian. Recluidos en un cuerpo que les resulta diferente, comienzan a comunicarse.','Romance'),
 ('The silent voice', 'Gijn', null, 'Shoko Nishimiya, una estudiante de primaria sorda, empieza a sentir el bullying cuando se cambia de colegio','Romance'),
 ('Berserk', 'Miura, Kentarou', null, 'Guts, un ex mercenario ahora conocido como el "Espadachín Negro", busca venganza.','Acción'),
 ('One Piece', 'Oda, Eiichiro', null, 'Gol D. Roger, un hombre conocido como el "Rey Pirata", será ejecutado por el Gobierno Mundial.','Aventura'),
 ('Fullmetal Alchemist', 'Arakawa, Hiromu', null, 'Los alquimistas son personas con conocimientos y talento natural que pueden manipular y modificar la materia gracias a su arte.','Acción'),
 ('Oyasumi Punpun', 'Asano, Inio', null, 'Punpun Onodera es un niño normal de 11 años que vive en Japón. Sin esperanza, idealista y romántico, Punpun comienza a ver que su vida toma un giro sutil, aunque sorprendente, hacia el adulto cuando conoce a la nueva chica de su clase, Aiko Tanaka.','Drama'),
 ('¡¡Haikyuu !!', 'Furudate, Haruichi', null, 'Vóleibol. Un deporte en el que se enfrentan dos equipos, separados por una formidable red en forma de muro.','Comedia'),
 ('Koe no Katachi', 'Ooima, Yoshitoki', null, 'Shouya Ishida, un chico que siempre busca formas de vencer el aburrimiento, termina buscándolo en el lugar equivocado.','Drama'),
 ('Houseki no Kuni', 'Ichikawa, Haruko', null, 'Hace mucho tiempo, la Tierra fue golpeada por seis meteoritos, creando seis lunas y dejando una isla solitaria a su paso.','Acción'),
 ('Jumyou wo Kaitotte Moratta.', 'Taguchi, Shouichi', null, 'Indefenso y luchando por conseguir dinero en efectivo, Kusunoki, de 20 años, vende sus últimas posesiones para comprar comida.','Drama'),
 ('One Punch-Man', ' Murata, Yusuke, ONE', null, 'Después de entrenar rigurosamente durante tres años, el Saitama ordinario ha ganado una fuerza inmensa que le permite derrotar a cualquiera y cualquier cosa con un solo golpe.','Acción'),
 ('Hunter x Hunter', 'Togashi, Yoshihiro', null, 'Tesoros secretos, riquezas por descubrir ... lugares místicos, fronteras inexploradas ... "El misterioso desconocido". Hay magia en esas palabras para aquellos cautivados por su hechizo. ¡Se llaman "Cazadores"!','Aventura'),
 ('Yagate Kimi ni Naru', 'Nakatani, Nio', null, 'Yuu Koito siempre ha disfrutado del manga romántico y las canciones de amor. Se aferra a ellos con la esperanza de que algún día experimentará su propia historia de amor, una que la hará perder el control y hará que su corazón se acelere.','Escuela'),
 ('Attack on Titan', 'Isayama, Hajime', null, 'Hace cientos de años, aparecieron horribles criaturas que se parecían a los humanos. Estos gigantes inmensos e inconscientes, llamados "titanes", demostraron ser una amenaza existencial, ya que se aprovecharon de cualquier humano que pudieran encontrar para satisfacer un apetito aparentemente interminable.','Acción'),
 ('Pandora Hearts', 'Mochizuki, Jun', null, 'Con reminiscencias de una caja de juguetes rota, el místico Abismo es un reino aterrador que alberga criaturas monstruosas llamadas "Cadenas".','Fantasía'),
 ('Gintama', 'Sorachi, Hideaki', null, 'Durante el período Edo, Japón es repentinamente invadido por criaturas alienígenas conocidas como "Amanto".','Acción'),
 ('Tokyo Ghoul', ' Ishida, Sui', null, 'Acechando entre las sombras de Tokio hay seres aterradores conocidos como "ghouls", que satisfacen su hambre alimentándose de humanos una vez que cae la noche.','Terror'),
 ('Chihayafuru', 'Suetsugu, Yuki', null, 'Siempre considerada inferior a su hermana mayor, Chihaya Ayase, de voluntad fuerte pero sin rumbo, no tiene ningún sueño propio.','Juegos'),
 ('Bakemonogatari', 'Nisio, ISin', null, 'Koyomi Araragi no es ajeno a lo anormal. Durante las vacaciones de primavera de su tercer año en la escuela secundaria, un fatídico encuentro con el vampiro Kiss-Shot Acerola-Orion Heart-Under-Blade lo convierte en un vampiro.','Vampiros'),
 ('Golden Kamuy', 'Noda, Satoru', null, 'Saichi Sugimoto es temido como el "Sugimoto inmortal" por su salvajismo en el campo de batalla durante la guerra ruso-japonesa, pero de ninguna manera es un héroe de guerra.','Histórico'),
 ('Fruits Basket', 'Takaya, Natsuki', null, 'Tooru Honda es huérfana y no tiene adónde ir más que una tienda de campaña en el bosque, hasta que la familia Souma la acoge.','Comedia'),
 ('Hinamatsuri', 'Ohtake, Masao', null, 'Yoshifumi Nitta, un yakuza de nivel medio, encuentra su vida cambiada para siempre cuando aparece una extraña cápsula y se estrella contra su cabeza.','Comedia'),
 ('Kimi no Suizou wo Tabetai', 'Kirihara, Idumi, Sumino, Yoru', null, 'La historia de la novela se cuenta desde el punto de vista de un protagonista anónimo que un día encuentra un diario en un hospital.','Drama'),
 ('Ookami a Koushinryou', 'Koume, Keito, Hasekura, Isuna', null, 'Soñando con tener algún día su propia tienda, el comerciante ambulante Kraft Lawrence pasa sus días buscando oportunidades comerciales.','Aventura'),
 ('Noragami', 'Adachitoka', null, 'Como una deidad menor relativamente desconocida sin ningún adorador, Delivery God Yato acepta trabajos ocasionales por solo cinco yenes, con el objetivo de amasar una fortuna lo suficientemente grande como para comprarse un santuario.','Acción'),
 ('Kuroshitsuji', 'Toboso, Yana', null, 'Escondida en la campiña inglesa se encuentra la ominosa mansión de los Phantomhives, una familia que se ha establecido como la fría y despiadada "Reina del perro guardián", así como la cabeza de la clandestinidad criminal de Londres.','Sobrenatural'),
 ('Kimi no Na wa', ' Shinkai, Makoto, Kotone, Ranmaru', null, 'Mitsuha Miyamizu es una estudiante de secundaria que vive en la ciudad rural de Itomori. Anhela una vida en Tokio porque está harta de vivir en el campo.','Romance');

INSERT INTO COMENTARIO (CONTENIDO, FECHA, ID_COMENTARIO_USUARIO, ID_COMENTARIO_PUBLI)
 VALUES 
 ('Es la mejor serie que he visto en mi vida','2021-04-11 11:00:00',1,1),
 ('Ni fu ni fa','2021-04-01 11:10:00',2,1),
 ('No podía pasar sin ver esta','2021-04-06 11:20:00',1,2),
 ('La peor decision que pude tomar','2021-04-08 11:30:00',3,3),
 ('Para pegarme un tiro','2021-04-02 11:40:00',4,5),
 ('Creía que daría para más','2021-04-13 11:50:00',5,4),
 ('La recomiendo un montón','2021-04-12 12:00:00',6,7),
 ('La trama empezó bien, pero luego...','2021-04-20 12:10:00',7,6),
 ('Deberían ponerle un poco más de acción','2021-04-24 12:20:00',8,8),
 ('Estoy muy feliz con el final','2021-04-01 12:30:00',9,7),
 ('Deberían hacer otra temporada más','2021-04-15 12:40:00',10,8),
 ('Creo que hasta yo haría una serie mejor','2021-04-24 12:50:00',11,16),
 ('Sin duda me la volvería a ver','2021-04-24 13:00:00',12,12),
 ('Vine por una review y me encantó','2021-04-22 13:10:00',13,11),
 ('Me encanta el ending','2021-04-16 13:20:00',14,15),
 ('¿Quién más quiere otra temporada?','2021-04-17 13:30:00',15,13),
 ('No me puedo creer como han manejado la trama','2021-04-15 13:40:00',15,14),
 ('Capaz y la recomiendo y todo','2021-04-09 13:50:00',1,16),
 ('Tiempo bien invertido','2021-04-04 01:00:00',2,17),
 ('Me encanta todo lo que saca este autor','2021-04-12 01:10:00',3,18),
 ('Es la mejor serie que he visto en mi vida','2021-04-11 01:20:00',4,19),
 ('Ni fu ni fa','2021-04-01 01:30:00',5,20),
 ('No podía pasar sin ver esta','2021-04-06 01:40:00',6,21),
 ('La peor decision que pude tomar','2021-04-08 01:50:00',7,22),
 ('Para pegarme un tiro','2021-04-02 02:00:00',8,25),
 ('Creía que daría para más','2021-04-13 02:10:00',9,24),
 ('La recomiendo un montón','2021-04-12 02:20:00',10,23),
 ('La trama empezó bien, pero luego...','2021-04-20 02:30:00',11,26),
 ('Deberían ponerle un poco más de acción','2021-04-24 02:40:00',12,28),
 ('Estoy muy feliz con el final','2021-04-01 02:50:00',13,27),
 ('Deberían hacer otra temporada más','2021-04-15 03:00:00',14,29),
 ('Creo que hasta yo haría una serie mejor','2021-04-24 03:10:00',15,30),
 ('Sin duda me la volvería a ver','2021-04-24 03:20:00',14,11),
 ('Es la mejor serie que he visto en mi vida','2021-04-11 03:30:00',1,21),
 ('Ni fu ni fa','2021-04-01 03:40:00',2,11),
 ('No podía pasar sin ver esta','2021-04-06 03:50:00',1,12),
 ('La peor decision que pude tomar','2021-04-08 04:00:00',3,13),
 ('Para pegarme un tiro','2021-04-02 04:10:00',4,15),
 ('Creía que daría para más','2021-04-13 04:20:00',5,14),
 ('La recomiendo un montón','2021-04-12 04:30:00',6,17),
 ('La trama empezó bien, pero luego...','2021-04-20 04:40:00',7,16),
 ('Deberían ponerle un poco más de acción','2021-04-24 04:50:00',8,18),
 ('Estoy muy feliz con el final','2021-04-01 05:00:00',9,17),
 ('Deberían hacer otra temporada más','2021-04-15 05:10:00',10,28),
 ('Creo que hasta yo haría una serie mejor','2021-04-24 05:20:00',11,26),
 ('Sin duda me la volvería a ver','2021-04-24 05:30:00',12,22),
 ('Vine por una review y me encantó','2021-04-22 05:40:00',13,21),
 ('Me encanta el ending','2021-04-16 05:50:00',14,15),
 ('¿Quién más quiere otra temporada?','2021-04-17 06:00:00',15,23),
 ('No me puedo creer como han manejado la trama','2021-04-15 06:10:00',1,24),
 ('Capaz y la recomiendo y todo','2021-04-09 06:20:00',1,26),
 ('Tiempo bien invertido','2021-04-04 06:30:00',2,27),
 ('Me encanta todo lo que saca este autor','2021-04-12 06:40:00',3,28),
 ('Es la mejor serie que he visto en mi vida','2021-04-11 06:50:00',4,29),
 ('Ni fu ni fa','2021-04-01 07:00:00',5,30),
 ('No podía pasar sin ver esta','2021-04-06 07:10:00',6,11),
 ('La peor decision que pude tomar','2021-04-08 07:20:00',7,2),
 ('Para pegarme un tiro','2021-04-02 07:20:00',8,5),
 ('Creía que daría para más','2021-04-13 07:30:00',9,4),
 ('La recomiendo un montón','2021-04-12 07:40:00',10,3),
 ('La trama empezó bien, pero luego...','2021-04-20 07:50:00',11,6),
 ('Deberían ponerle un poco más de acción','2021-04-24 08:00:00',12,8),
 ('Estoy muy feliz con el final','2021-04-01 08:10:00',13,7),
 ('Deberían hacer otra temporada más','2021-04-15 08:20:00',14,9),
 ('Creo que hasta yo haría una serie mejor','2021-04-24 08:30:00',15,10),
 ('Sin duda me la volvería a ver','2021-04-24 08:40:00',4,1);



 INSERT INTO PUBLICACION_FAVORITA (ID_PUBLICACION_FAV, ID_USUARIO_FAV)
 VALUES
 (1,1),
 (1,2),
 (1,15),
 (1,12),
 (2,1),
 (2,2),
 (2,3),
 (3,7),
 (3,4),
 (4,1),
 (5,9),
 (6,11),
 (6,14),
 (6,13),
 (7,8),
 (8,4),
 (8,7),
 (9,13),
 (10,14),
 (10,11),
 (10,8),
 (11,12),
 (12,11),
 (13,14),
 (15,2),
 (15,1);

 
