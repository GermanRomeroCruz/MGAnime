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

<div class="w-100 d-flex justify-content-center">
  <div class="w-50">
    <div class="perfil d-flex justify-content-center flex-column">

      <?php foreach ($usuario  as $fila) { ?>
        <h1> 
          <?=$fila['NOMBRE']?>
          <a href="configuracionUsuario.php"><i class="fas fa-user-edit text-dark"></i></a>
          <a  title="¿Quieres borrar tu perfil?" onclick="borrar()">🗑️</a>
        </h1>
        <img src="<?=$fila['IMAGEN']?>" alt="" class="w-75">
        <h5 class="negrita text-center"> Correo </h5>
        <h5 class="text-center"> <?=$fila['EMAIL']?> </h5>
        <h5 class="negrita text-center"> Rol </h5>
        <h5 class="text-center"><?=$fila['ROL']?> </h5>
      <?php } ?>
    </div>

    <?php if($publicacion == true){?>
      <div class=" bg-white rounded">
        <h4 class="titulo"> Tus publicaciones favoritas </h4>
        <?php for ($i=0; $i < count($publicaciones); $i++) {?>
              <h5 class="text-center"><a href="publicacion.php?id=<?=$publicaciones[$i]['ID_PUBLI']?>" class="enlace"><?=$publicaciones[$i]['TITULO']?></a></h5>
              <hr>
      <?php } ?>
      </div>
    </div>
  <?php } ?>
</div>
  
<script>
  function borrar(){
     let opcion =  confirm("¿Estás seguro de que quieres borrar tu perfil?");
     console.log(opcion);
     if (opcion === true) {
        location.href='borrarADMIN.php?id_usuario=<?=$id?>';
     }
  }
</script>