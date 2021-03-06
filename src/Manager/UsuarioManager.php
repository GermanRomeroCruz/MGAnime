<?php

  class UsuarioManager implements IDWESEntidadManager{

    public static function autentificado($nombre){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT ID_USU,NOMBRE,PASS,EMAIL
                    FROM  USUARIO
                    WHERE NOMBRE = ? ",
                    $nombre);
      $datos =  $db->obtenDatos();
      if(count($datos)>0) return $datos[0];
    }
    public static function getAll(){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM  USUARIO");
      return $db->obtenDatos();
    }
    public static function getById($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM USUARIO WHERE ID_USU = ?",$id);
      return $db->obtenDatos()[0];
    }

    public static function getByIdPerfil($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT * FROM USUARIO WHERE ID_USU = ?",$id);
      return $db->obtenDatos();
    }
    public static function insert(...$campos){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("INSERT INTO USUARIO (NOMBRE, PASS , EMAIL , IMAGEN,ROL )
                    VALUES (?, ?, ?, ?, ?)",
                    $campos);
    }
    public static function update($id, ...$campos){
      $parametros = $campos;
      array_push($parametros,$id);
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("UPDATE USUARIO
                    SET NOMBRE = ?,
                        PASS = ?,
                        EMAIL = ?,
                        ROL = ?,
                    WHERE ID_USU = ?",
                    $parametros);
    }

    public static function updateROL($id,...$campos){
      $parametros = $campos;
      array_push($parametros,$id);
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("UPDATE USUARIO
                    SET  ROL = ?
                    WHERE ID_USU = ?",
                    $parametros);
    }
    public static function delete($id){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("DELETE FROM USUARIO WHERE ID_USU = ?", $id);
    }
    public static function getAllNom(){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT NOMBRE FROM USUARIO ");
      return $db->obtenDatos();
    }
    public static function getAllMail(){
      $db = DWESBaseDatos::obtenerInstancia();
      $db->ejecuta("SELECT EMAIL FROM USUARIO ");
      return $db->obtenDatos();
    }
  }

?>
