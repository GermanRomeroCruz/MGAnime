<?php
  //Página que tramita favoritos de Rutinas
 if(isset($_GET)){
   //Usamos clearinput para limpiar inserciones de código
  $id_user= clear_input($_GET['id_user']);
  $id_publicacion= clear_input($_GET['id_publicacion']);
  $fav= clear_input($_GET['fav']);
  //Comprobamos si está o no en favoritos
  if($fav != 'null'){
    //Si ya está en favoritos se borra
    PublicacionFavoritaManager::delete($fav);
  }else{
    //Si no, se hace la inserción en la tabla
    PublicacionFavoritaManager::insert(intval($id_publicacion),intval($id_user));
  }
  //Mandamos la respuesta con la consulta de la rutina
  $res = PublicacionFavoritaManager::getByIdPublicacion($id_publicacion,$id_user);
  if($res == null){
    $resultado = 'null';
  }else{
    $resultado = $res[0]['ID_PUBLI_FAV'];
  }
  print_r($resultado);
}
?>
