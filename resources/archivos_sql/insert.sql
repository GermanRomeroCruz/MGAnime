use animeMG;

/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (NOMBRE,PASS,EMAIL,IMAGEN,ROL)
 VALUES
 ('Mayra','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','adriansanzclase@gmail.com',null,'ADMIN'),/*1234*/
 ('Steven','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','steven.cadena.giler@gmail.com',null,'ADMIN'),/*1234*/
 ('German','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','germancarab@gmail.com',null,'ADMIN'),/*1234*/
 ('Pablo','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','pablo@gmail.com',null,'USER'),/*1234*/
 ('Soraya','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','soraya@gmail.com',null,'USER'),/*1234*/
 ('Lucia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','lucia@gmail.com',null,'USER');/*1234*/


INSERT INTO COMENTARIO (CONTENIDO, FECHA)
 VALUES 
 ('es la mejor serie que he visto en mi vida','2021/04/11'),
 ('ni fu ni fa','2021/04/1'),
 ('no podia pasar sin ver esta','2021/04/6'),
 ('la peor decision que pude tomar','2021/04/8'),
 ('para pegarme un tiro','2021/04/2');

 INSERT INTO PUBLICACIONES (TITULO, AUTOR,  IMAGEN, DESCRIPCION, CATEGORIA)
 VALUES
 ('hellsing', 'oki',null, 'un vampiro que caza todo','vampiros'),
 ('como me reencarne en un slime',null, 'yuo', 'alguien muere en nuestro mundo y reencarna en otro como un monstruo','fantasia'),
 ('diamond no ace', 'oitrie',null, 'un chico de pueblo que se va a otra escuela para jugar al baseball','deportes'),
 ('your name', 'askio',null, 'los cuerpos de ambos se intercambian. Recluidos en un cuerpo que les resulta diferente, comienzan a comunicarse.','amor'),
 ('the silent voice', 'gijn',null, 'Shoko Nishimiya, una estudiante de primaria sorda, empieza a sentir el bullying cuando se cambia de colegio','amor');

 
 INSERT INTO VALORACIONES (PUNTUACION)
 VALUES
 (5),
 (4),
 (3),
 (2),
 (1);

 INSERT INTO VALORACIONES_USUARIOS (ID_USUARIO_USUVAL, ID_VALORACION_USUVAL)
 VALUES
 (1,1),
 (1,2),
 (2,1),
 (3,4),
 (3,3),
 (4,5),
 (4,3),
 (5,4),
 (5,1);

 INSERT INTO COMENTARIOS_USUARIOS (ID_USUARIO_COMUSU , ID_COMENTARIO_COMUSU, ID_PUBLICACION_COMUSU)
 VALUES
 (1,1,1),
 (1,2,1),
 (2,1,2),
 (3,4,2),
 (3,3,4),
 (4,5,3),
 (4,3,5),
 (5,4,3),
 (5,1,4);

 INSERT INTO PUBLICACION_FAVORITA (ID_PUBLICACION_FAV, ID_USUARIO_FAV)
 VALUES
 (1,1),
 (1,2),
 (2,1),
 (3,4),
 (3,3),
 (4,5),
 (4,3),
 (5,4),
 (5,1);