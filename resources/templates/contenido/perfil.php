<?php

  areaPrivada();
  $id = $_SESSION['ID'];

  $usuario = UsuarioManager::getByIdPerfil($id);

  $favPublicacion = PublicacionFavoritaManager::getAllByIdUser($id);

  $publicaciones = [];
  $publicacion = false;
  if(count($favPublicacion) != 0){
    for ($i=0; $i < count($favPublicacion); $i++) {
      $publicaciones[$i]= PublicacionManager::getById($favPublicacion[$i]['ID_PUBLICACION_FAV']);
    }
    $publicacion = true;
  }
?>
  <div class="perfil">
    <?php foreach ($usuario  as $fila) { ?>
      <h1> <?=$fila['NOMBRE']?></h1>
      <p> <img src="<?=$fila['IMAGEN']?>" alt=""></p>
      <p class="negrita"> Correo </p>
      <p> <?=$fila['EMAIL']?> </p>
      <p class="negrita"> Rol </p>
      <p><?=$fila['ROL']?> </p>
      <a href="configuracionUsuario.php">Editar Perfil</a>
    <?php } ?>
  </div>

  <?php if($publicacion == true){?>
    <div class="favoritos">
      <p class="negrita">Tus publicaciones favoritas</p>
      <?php for ($i=0; $i < count($publicaciones); $i++) {?>
            <p>-<a href="publicacion.php?id=<?=$publicaciones[$i]['ID_PUBLI']?>"><?=$publicaciones[$i]['TITULO']?></a></p>
    <?php } ?>
    </div>
  <?php } ?>

  
