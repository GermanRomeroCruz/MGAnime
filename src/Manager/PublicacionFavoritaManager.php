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
  public static function update($id, ...$campos){ }

}


?>
