<?php

class PublicacionManager {


  public static function getAll(){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES");
    return $db->obtenDatos();
  }
  public static function getById($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES WHERE ID_PUBLI = ?",$id);
    return $db->obtenDatos()[0];
  }

  public static function getByIdAJAX($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES WHERE ID_PUBLI = ?",$id);
    return $db->obtenDatos();
  }


  public static function getIdByTitulo($titulo){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT ID FROM PUBLICACIONES WHERE TITULO = ?",$titulo);
    return $db->obtenDatos()[0];
  }
  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO PUBLICACIONES (TITULO,AUTOR,IMAGEN,DESCRIPCION,CATEGORIA)
                  VALUES (?, ?, ?, ?, ?)",
                  $campos);
  }
  public static function update($id, ...$campos){
    $parametros = $campos;
    array_push($parametros,$id);
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("UPDATE PUBLICACIONES
                  SET TITULO = ?,
                      AUTOR = ?,
                      IMAGEN = ?,
                      DESCRIPCION = ?,
                      CATEGORIA = ?
                  WHERE ID_PUBLI= ?",
                  $parametros);
  }
  public static function delete($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM PUBLICACIONES WHERE ID_PUBLI = ?", $id);
  }

  public static function consultaExtra($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES WHERE ID_PUBLI = ?", $id);
  }
  public static function verMasPublicacion($id){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES where ID_PUBLI limit ? , 3 ",$id);
    return $db->obtenDatos();
  }
  /*ESTO ES PARA EL BUSCADOR*/
  public static function getTituloSolo($busqueda){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES WHERE  TITULO LIKE  '%$busqueda%'");
    return $db->obtenDatos();
  }

  /*ESTO ES PARA EL BUSCADOR DE AUTOR*/
  public static function getAutorSolo($busqueda){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT * FROM PUBLICACIONES WHERE  AUTOR LIKE  '%$busqueda%'");
    return $db->obtenDatos();
  }

}

?>
