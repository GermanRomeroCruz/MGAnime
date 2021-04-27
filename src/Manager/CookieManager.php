<?php

class CookieManager implements IDWESEntidadManager
{
  public static function getAll(){

  }

  public static function getById($cookie){

    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("SELECT ID_USUARIO_COOKIE
                  FROM COOKIE_SESION
                  WHERE COOKIE = ?",
                  $cookie);
    $datos = $db->obtenDatos();
    if(count($datos)>0) return $datos[0];
  }

  public static function insert(...$campos){
    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("INSERT INTO COOKIE_SESION (COOKIE, ID_USUARIO_COOKIE)
                  VALUES (?, ?)", $campos);
    return $db->obtenDatos();
  }

  public static function update($id, ...$campos){
  }

  public static function delete($id){

    $db = DWESBaseDatos::obtenerInstancia();
    $db->ejecuta("DELETE FROM COOKIE_SESION
                  WHERE ID_USUARIO_COOKIE =  ?", $id);
  }
}
