<?php
  global $ROOT;
  global $config;

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $id_user = $_SESSION['ID'];
  $datosPublicacion = PublicacionManager::getById($id);
  $fav = PublicacionFavoritaManager::getByIdPublicacion($id,$id_user)[0];
  if($fav == null){
    $favoritos = 'null';
  }else{
    $favoritos = $fav['ID_PUBLI_FAV'];
  }

?>
<div class="rutina">
  <h1><?= $datosPublicacion['TITULO']?></h1>
  <div class="icono">
    <?php if ($_SESSION["ID"] != null) {
      
      if($fav == null){ ?>
      <label for="agregar"><figure><img src="imagenes/noFav.png" id="imagen"> <figcaption>Agregar a favoritos</figcaption> </figure> </label>
      <input type="checkbox" id="agregar" name="noFavorito" value="noFavorito" class="noFavorito">
    <?php }else{?>
      <label for="quitar"><figure><img src="imagenes/favorito.png" id="imagen"> <figcaption>Quitar de favoritos</figcaption> </figure></label>
      <input type="checkbox" id="quitar" name="Favorito" value="Favorito" class="favorito">
    <?php }
  }?>
  </div>
  <div class="rutinaCabecera">

    <p> <span class="negrita">Descripción:</span><?= $datosPublicacion['DESCRIPCION']?></p>
  </div>
</div>

<script type="text/javascript">

  let favorito = document.querySelector('label');
  let favoritos = <?=$favoritos?>;
  let fav = favoritos || 'null';

  $(favorito).click(function(){

    let id_publicaion = <?=$datosPublicacion['ID_PUBLI']?>;
    let id_user = <?=$id_user?>;
    
    $.ajax(
      {
        url : 'AJAXPublicacionFav.php',
        type: "GET",
        data : {"fav": fav,"id_user": id_user,"id_publicacion": id_publicaion}
      })
        .done(function(data) {
          console.log(data);
          fav = data;
          let im =  document.getElementById('imagen');
          let figcaption = document.querySelector('figcaption');
          if (fav != 'null') {
            im.src="imagenes/favorito.png";
            figcaption.innerHTML = "Quitar de favoritos";
          }else{
            im.src="imagenes/noFav.png";
            figcaption.innerHTML = "Agregar a favoritos";
          }
        })
        .fail(function(data) {
          console.log(data);
          alert( "error" );
        });
});

</script>
