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
 ('Hellsing', 'Oki', '/imgs/publicacion/1/hellsin.jpg', 'Un vampiro que caza todo','Vampiros'),
 ('Como me reencarne en un slime', 'Yuo', '/imgs/publicacion/2/slime.jpg', 'Alguien muere en nuestro mundo y reencarna en otro como un monstruo','Fantasia'),
 ('Diamond no ace', 'Oitrie', '/imgs/publicacion/3/diamond.jpg', 'Un chico de pueblo que se va a otra escuela para jugar al baseball','Deportes'),
 ('Your name', 'Askio', '/imgs/publicacion/4/name.jpeg', 'Los cuerpos de ambos se intercambian. Recluidos en un cuerpo que les resulta diferente, comienzan a comunicarse.','Romance'),
 ('The silent voice', 'Gijn', '/imgs/publicacion/5/voice.jpg', 'Shoko Nishimiya, una estudiante de primaria sorda, empieza a sentir el bullying cuando se cambia de colegio','Romance'),
 ('Berserk', 'Miura, Kentarou', '/imgs/publicacion/6/berserk.jpg', 'Guts, un ex mercenario ahora conocido como el "Espadach??n Negro", busca venganza.','Acci??n'),
 ('One Piece', 'Oda, Eiichiro', '/imgs/publicacion/7/onepiece.jpg', 'Gol D. Roger, un hombre conocido como el "Rey Pirata", ser?? ejecutado por el Gobierno Mundial.','Aventura'),
 ('Fullmetal Alchemist', 'Arakawa, Hiromu', '/imgs/publicacion/8/fullmetal.jpg', 'Los alquimistas son personas con conocimientos y talento natural que pueden manipular y modificar la materia gracias a su arte.','Acci??n'),
 ('Oyasumi Punpun', 'Asano, Inio', '/imgs/publicacion/9/oyasumi.jpg', 'Punpun Onodera es un ni??o normal de 11 a??os que vive en Jap??n. Sin esperanza, idealista y rom??ntico, Punpun comienza a ver que su vida toma un giro sutil, aunque sorprendente, hacia el adulto cuando conoce a la nueva chica de su clase, Aiko Tanaka.','Drama'),
 ('????Haikyuu !!', 'Furudate, Haruichi', '/imgs/publicacion/10/haikyuu.png', 'V??leibol. Un deporte en el que se enfrentan dos equipos, separados por una formidable red en forma de muro.','Comedia'),
 ('Koe no Katachi', 'Ooima, Yoshitoki', '/imgs/publicacion/11/koe.jpg', 'Shouya Ishida, un chico que siempre busca formas de vencer el aburrimiento, termina busc??ndolo en el lugar equivocado.','Drama'),
 ('Houseki no Kuni', 'Ichikawa, Haruko', '/imgs/publicacion/12/kuni.jpg', 'Hace mucho tiempo, la Tierra fue golpeada por seis meteoritos, creando seis lunas y dejando una isla solitaria a su paso.','Acci??n'),
 ('Jumyou wo Kaitotte Moratta.', 'Taguchi, Shouichi', '/imgs/publicacion/13/jumyou.jpg', 'Indefenso y luchando por conseguir dinero en efectivo, Kusunoki, de 20 a??os, vende sus ??ltimas posesiones para comprar comida.','Drama'),
 ('One Punch-Man', ' Murata, Yusuke, ONE', '/imgs/publicacion/14/onepunch.jpeg', 'Despu??s de entrenar rigurosamente durante tres a??os, el Saitama ordinario ha ganado una fuerza inmensa que le permite derrotar a cualquiera y cualquier cosa con un solo golpe.','Acci??n'),
 ('Hunter x Hunter', 'Togashi, Yoshihiro', '/imgs/publicacion/15/hunter.jpg', 'Tesoros secretos, riquezas por descubrir ... lugares m??sticos, fronteras inexploradas ... "El misterioso desconocido". Hay magia en esas palabras para aquellos cautivados por su hechizo. ??Se llaman "Cazadores"!','Aventura'),
 ('Yagate Kimi ni Naru', 'Nakatani, Nio', '/imgs/publicacion/16/naru.jpg', 'Yuu Koito siempre ha disfrutado del manga rom??ntico y las canciones de amor. Se aferra a ellos con la esperanza de que alg??n d??a experimentar?? su propia historia de amor, una que la har?? perder el control y har?? que su coraz??n se acelere.','Escuela'),
 ('Attack on Titan', 'Isayama, Hajime', '/imgs/publicacion/17/titan.jpeg', 'Hace cientos de a??os, aparecieron horribles criaturas que se parec??an a los humanos. Estos gigantes inmensos e inconscientes, llamados "titanes", demostraron ser una amenaza existencial, ya que se aprovecharon de cualquier humano que pudieran encontrar para satisfacer un apetito aparentemente interminable.','Acci??n'),
 ('Pandora Hearts', 'Mochizuki, Jun', '/imgs/publicacion/18/pandora.png', 'Con reminiscencias de una caja de juguetes rota, el m??stico Abismo es un reino aterrador que alberga criaturas monstruosas llamadas "Cadenas".','Fantas??a'),
 ('Gintama', 'Sorachi, Hideaki', '/imgs/publicacion/19/gintana.jpg', 'Durante el per??odo Edo, Jap??n es repentinamente invadido por criaturas alien??genas conocidas como "Amanto".','Acci??n'),
 ('Tokyo Ghoul', ' Ishida, Sui', '/imgs/publicacion/20/ghoul.jpg', 'Acechando entre las sombras de Tokio hay seres aterradores conocidos como "ghouls", que satisfacen su hambre aliment??ndose de humanos una vez que cae la noche.','Terror'),
 ('Chihayafuru', 'Suetsugu, Yuki', '/imgs/publicacion/21/chiha.jpg', 'Siempre considerada inferior a su hermana mayor, Chihaya Ayase, de voluntad fuerte pero sin rumbo, no tiene ning??n sue??o propio.','Juegos'),
 ('Bakemonogatari', 'Nisio, ISin', '/imgs/publicacion/22/bake.jpg', 'Koyomi Araragi no es ajeno a lo anormal. Durante las vacaciones de primavera de su tercer a??o en la escuela secundaria, un fat??dico encuentro con el vampiro Kiss-Shot Acerola-Orion Heart-Under-Blade lo convierte en un vampiro.','Vampiros'),
 ('Golden Kamuy', 'Noda, Satoru', '/imgs/publicacion/23/golden.png', 'Saichi Sugimoto es temido como el "Sugimoto inmortal" por su salvajismo en el campo de batalla durante la guerra ruso-japonesa, pero de ninguna manera es un h??roe de guerra.','Hist??rico'),
 ('Fruits Basket', 'Takaya, Natsuki', '/imgs/publicacion/24/fruba.jpg', 'Tooru Honda es hu??rfana y no tiene ad??nde ir m??s que una tienda de campa??a en el bosque, hasta que la familia Souma la acoge.','Comedia'),
 ('Hinamatsuri', 'Ohtake, Masao', '/imgs/publicacion/25/hina.jpg', 'Yoshifumi Nitta, un yakuza de nivel medio, encuentra su vida cambiada para siempre cuando aparece una extra??a c??psula y se estrella contra su cabeza.','Comedia'),
 ('Kimi no Suizou wo Tabetai', 'Kirihara, Idumi, Sumino, Yoru', '/imgs/publicacion/26/pancreas.jpg', 'La historia de la novela se cuenta desde el punto de vista de un protagonista an??nimo que un d??a encuentra un diario en un hospital.','Drama'),
 ('Ookami a Koushinryou', 'Koume, Keito, Hasekura, Isuna', '/imgs/publicacion/27/okami.jpg', 'So??ando con tener alg??n d??a su propia tienda, el comerciante ambulante Kraft Lawrence pasa sus d??as buscando oportunidades comerciales.','Aventura'),
 ('Noragami', 'Adachitoka', '/imgs/publicacion/28/noragami.jpg', 'Como una deidad menor relativamente desconocida sin ning??n adorador, Delivery God Yato acepta trabajos ocasionales por solo cinco yenes, con el objetivo de amasar una fortuna lo suficientemente grande como para comprarse un santuario.','Acci??n'),
 ('Kuroshitsuji', 'Toboso, Yana', '/imgs/publicacion/29/kuroshitsuji.jpg', 'Escondida en la campi??a inglesa se encuentra la ominosa mansi??n de los Phantomhives, una familia que se ha establecido como la fr??a y despiadada "Reina del perro guardi??n", as?? como la cabeza de la clandestinidad criminal de Londres.','Sobrenatural'),
 ('Kimi no Na wa', ' Shinkai, Makoto, Kotone, Ranmaru', '/imgs/publicacion/30/nawa.jpg', 'Mitsuha Miyamizu es una estudiante de secundaria que vive en la ciudad rural de Itomori. Anhela una vida en Tokio porque est?? harta de vivir en el campo.','Romance');

INSERT INTO COMENTARIO (CONTENIDO, FECHA, ID_COMENTARIO_USUARIO, ID_COMENTARIO_PUBLI)
 VALUES 
 ('Es la mejor serie que he visto en mi vida','2021-04-11 11:00:00',1,1),
 ('Ni fu ni fa','2021-04-01 11:10:00',2,1),
 ('No pod??a pasar sin ver esta','2021-04-06 11:20:00',1,2),
 ('La peor decision que pude tomar','2021-04-08 11:30:00',3,3),
 ('Para pegarme un tiro','2021-04-02 11:40:00',4,5),
 ('Cre??a que dar??a para m??s','2021-04-13 11:50:00',5,4),
 ('La recomiendo un mont??n','2021-04-12 12:00:00',6,7),
 ('La trama empez?? bien, pero luego...','2021-04-20 12:10:00',7,6),
 ('Deber??an ponerle un poco m??s de acci??n','2021-04-24 12:20:00',8,8),
 ('Estoy muy feliz con el final','2021-04-01 12:30:00',9,7),
 ('Deber??an hacer otra temporada m??s','2021-04-15 12:40:00',10,8),
 ('Creo que hasta yo har??a una serie mejor','2021-04-24 12:50:00',11,16),
 ('Sin duda me la volver??a a ver','2021-04-24 13:00:00',12,12),
 ('Vine por una review y me encant??','2021-04-22 13:10:00',13,11),
 ('Me encanta el ending','2021-04-16 13:20:00',14,15),
 ('??Qui??n m??s quiere otra temporada?','2021-04-17 13:30:00',15,13),
 ('No me puedo creer como han manejado la trama','2021-04-15 13:40:00',15,14),
 ('Capaz y la recomiendo y todo','2021-04-09 13:50:00',1,16),
 ('Tiempo bien invertido','2021-04-04 01:00:00',2,17),
 ('Me encanta todo lo que saca este autor','2021-04-12 01:10:00',3,18),
 ('Es la mejor serie que he visto en mi vida','2021-04-11 01:20:00',4,19),
 ('Ni fu ni fa','2021-04-01 01:30:00',5,20),
 ('No pod??a pasar sin ver esta','2021-04-06 01:40:00',6,21),
 ('La peor decision que pude tomar','2021-04-08 01:50:00',7,22),
 ('Para pegarme un tiro','2021-04-02 02:00:00',8,25),
 ('Cre??a que dar??a para m??s','2021-04-13 02:10:00',9,24),
 ('La recomiendo un mont??n','2021-04-12 02:20:00',10,23),
 ('La trama empez?? bien, pero luego...','2021-04-20 02:30:00',11,26),
 ('Deber??an ponerle un poco m??s de acci??n','2021-04-24 02:40:00',12,28),
 ('Estoy muy feliz con el final','2021-04-01 02:50:00',13,27),
 ('Deber??an hacer otra temporada m??s','2021-04-15 03:00:00',14,29),
 ('Creo que hasta yo har??a una serie mejor','2021-04-24 03:10:00',15,30),
 ('Sin duda me la volver??a a ver','2021-04-24 03:20:00',14,11),
 ('Es la mejor serie que he visto en mi vida','2021-04-11 03:30:00',1,21),
 ('Ni fu ni fa','2021-04-01 03:40:00',2,11),
 ('No pod??a pasar sin ver esta','2021-04-06 03:50:00',1,12),
 ('La peor decision que pude tomar','2021-04-08 04:00:00',3,13),
 ('Para pegarme un tiro','2021-04-02 04:10:00',4,15),
 ('Cre??a que dar??a para m??s','2021-04-13 04:20:00',5,14),
 ('La recomiendo un mont??n','2021-04-12 04:30:00',6,17),
 ('La trama empez?? bien, pero luego...','2021-04-20 04:40:00',7,16),
 ('Deber??an ponerle un poco m??s de acci??n','2021-04-24 04:50:00',8,18),
 ('Estoy muy feliz con el final','2021-04-01 05:00:00',9,17),
 ('Deber??an hacer otra temporada m??s','2021-04-15 05:10:00',10,28),
 ('Creo que hasta yo har??a una serie mejor','2021-04-24 05:20:00',11,26),
 ('Sin duda me la volver??a a ver','2021-04-24 05:30:00',12,22),
 ('Vine por una review y me encant??','2021-04-22 05:40:00',13,21),
 ('Me encanta el ending','2021-04-16 05:50:00',14,15),
 ('??Qui??n m??s quiere otra temporada?','2021-04-17 06:00:00',15,23),
 ('No me puedo creer como han manejado la trama','2021-04-15 06:10:00',1,24),
 ('Capaz y la recomiendo y todo','2021-04-09 06:20:00',1,26),
 ('Tiempo bien invertido','2021-04-04 06:30:00',2,27),
 ('Me encanta todo lo que saca este autor','2021-04-12 06:40:00',3,28),
 ('Es la mejor serie que he visto en mi vida','2021-04-11 06:50:00',4,29),
 ('Ni fu ni fa','2021-04-01 07:00:00',5,30),
 ('No pod??a pasar sin ver esta','2021-04-06 07:10:00',6,11),
 ('La peor decision que pude tomar','2021-04-08 07:20:00',7,2),
 ('Para pegarme un tiro','2021-04-02 07:20:00',8,5),
 ('Cre??a que dar??a para m??s','2021-04-13 07:30:00',9,4),
 ('La recomiendo un mont??n','2021-04-12 07:40:00',10,3),
 ('La trama empez?? bien, pero luego...','2021-04-20 07:50:00',11,6),
 ('Deber??an ponerle un poco m??s de acci??n','2021-04-24 08:00:00',12,8),
 ('Estoy muy feliz con el final','2021-04-01 08:10:00',13,7),
 ('Deber??an hacer otra temporada m??s','2021-04-15 08:20:00',14,9),
 ('Creo que hasta yo har??a una serie mejor','2021-04-24 08:30:00',15,10),
 ('Sin duda me la volver??a a ver','2021-04-24 08:40:00',4,1);



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

 
