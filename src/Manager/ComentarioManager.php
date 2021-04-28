<?php

class ComentarioManager {


  public static function getAll($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM  COMENTARIO WHERE ID_COMENTARIO_PUBLI = ? ORDER BY FECHA DESC", $id);
    return $db->obtenDatos();
  }
  public static function getById($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM COMENTARIO WHERE ID_COM = ?",$id);
    return $db->obtenDatos()[0];
  }
  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO COMENTARIO (CONTENIDO, FECHA, ID_COMENTARIO_USUARIO, ID_COMENTARIO_PUBLI)
                  VALUES (?, ?, ?, ?)",
                  $campos);
  }
  public static function update($id, ...$campos){
    $parametros = $campos;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE COMENTARIO
                  SET CONTENIDO = ?,
                      FECHA = ? 
                  WHERE ID_COM = ?",
                  $parametros);
  }
  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM COMENTARIO WHERE ID_COM = ?", $id);
  }
}

?>
