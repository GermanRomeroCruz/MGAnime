<?php

class PublicacionFavoritaManager implements IDWESEntidadManager{

  public static function getAll(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM  PUBLICACION_FAVORITA");
    return $db->obtenDatos();
  }
  public static function getById($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACION_FAVORITA WHERE ID_PUBLI_FAV = ?",$id);
    return $db->obtenDatos()[0];
  }
  public static function getAllByIdUser($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACION_FAVORITA WHERE ID_USUARIO_FAV = ?",$id);
    return $db->obtenDatos();
  }
  public static function getByIdPublicacion(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACION_FAVORITA WHERE ID_PUBLICACION_FAV = ? AND
                  ID_USUARIO_FAV = ? ",$campos);
    return $db->obtenDatos();
  }
  public static function getByIdPublicacionContar($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT count(ID_PUBLI_FAV) as 'CUENTA' FROM PUBLICACION_FAVORITA WHERE ID_PUBLICACION_FAV = ?",$id);
    return $db->obtenDatos();
  }
  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO PUBLICACION_FAVORITA (ID_PUBLICACION_FAV,ID_USUARIO_FAV )
                  VALUES ( ?, ?)",
                  $campos);
  }
  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM PUBLICACION_FAVORITA WHERE ID_PUBLI_FAV = ?", $id);
  }
  public static function contarLikes(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT ID_PUBLICACION_FAV,COUNT(*) AS CUENTA FROM PUBLICACION_FAVORITA GROUP BY ID_PUBLICACION_FAV  ORDER BY CUENTA DESC LIMIT 5 ");
    return $db->obtenDatos();
  }

  public static function update($id, ...$campos){ }

}


?>
