<?php
function as_debug($que, $msg=""){
  echo "<pre>";
  echo $msg;
  print_r($que);
  echo "</pre>";
}
function clear_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function gestionaErrores($post, &$info, &$errores){
  foreach($post as $key=>$value){
      if ( isset($post[$key]) && $value != '' ){
        $info[$key] = clear_input($value);
      } else{
        $errores[$key] = "ERROR ".strtoupper($key);
      }
  }
}
function areaPrivada(){
  if(!isset($_SESSION['autentificado']) || $_SESSION['autentificado'] != true ){
  //if($_SESSION['autentificado'] !=true){
      header('Location: login.php');
      die();
  }
}

function startsWith ($string, $startString) {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}
 //funciona que guarda las imagenes en la BBDD
function guardarImagen($carpeta,$id,$imagen){
  global $ROOT;
  global $config;

  $fichero;
  $nombreImg;
  //metemos la información dentro de las variables
  $dirCarpeta = "$carpeta";
  $dirID = "$id";
  $nombre = $imagen;
  //son variables para la ruta
  $rutaSEHDir = "/$dirCarpeta/$dirID/";
  $rutaSEH = "$rutaSEHDir$nombre";

  $rutaURLImagenParaBD = $config['img_in_url'] . $rutaSEH;
  $rutaFísicaDeFichero = $ROOT . $config['img_path'] . $rutaSEH;

  $nombreImg = explode('/',$imagen);

  mkdir($ROOT . $config['img_path'] . $rutaSEHDir, 0777, true);
  echo $rutaFísicaDeFichero;
  move_uploaded_file($_FILES['imagen']['tmp_name'],$rutaFísicaDeFichero);
  return $rutaURLImagenParaBD;
}

//Función para borrar las carpetas, eliminando primero los archivos que tiene dentro
function borrarImagenes($id){
  $mis_fotos = "/home/usuario/MGAnime/public/imgs/publicacion/".$id;// Carpeta que contine archivos y queremos eliminar 
  foreach(glob($mis_fotos."/*.*") as $archivos_carpeta) { 
    unlink($archivos_carpeta);// Eliminamos todos los archivos de la carpeta hasta dejarla vacia 
  } 
  rmdir($mis_fotos);// Eliminamos la carpeta vacia 
}
?>
