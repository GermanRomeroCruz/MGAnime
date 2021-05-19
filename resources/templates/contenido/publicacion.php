<style>
    tr > th {
        color: #5781f9;
        font-weight: 800;
    }

    #btn1 /*input[type='checkbox']*/ { display: none;  }

    .contenedor1 {  margin: 1.2rem 0;  }
    
    

    .lbl-toggle1 {
        display: block;
        font-weight: bold;
        font-family: monospace;
        font-size: 1.2rem;
        text-transform: uppercase;
        text-align: center;
        padding: 1rem;
        color: #DDD; /*gris/blanco*/
        background: black; /*#004085;*/ /*azul oscuro*/
        cursor: pointer;
        border-radius: 7px;
        transition: all 0.25s ease-out;
    }

      .lbl-toggle1:hover {  color: #5781f9; /*#FFF; blanco/gris*/ }

      .lbl-toggle1::before {
          content: ' ';
          display: inline-block;
          border-top: 5px solid transparent;
          border-bottom: 5px solid transparent;
          border-left: 5px solid currentColor;
          vertical-align: middle;
          margin-right: .7rem;
          transform: translateY(-2px);
          transition: transform .2s ease-out;
      }

  .toggle1:checked + .lbl-toggle1::before {  transform: rotate(90deg) translateX(-3px); }

  .contenido-esconder1 {
      max-height: 0px;
      overflow: hidden;
      transition: max-height .25s ease-in-out;
  }

  .toggle1:checked + .lbl-toggle1 + .contenido-esconder1 {  max-height: 350px;  }

  .toggle1:checked + .lbl-toggle1{
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }

  .contenido-esconder1 .contenido {
      padding: 1rem;
  }

  .contenido-esconder1 form{  margin-bottom: 0;  }

</style>


<?php
  global $ROOT;
  global $config;

  if(isset($_GET['id']) || isset($_POST['id'])){
    if (isset($_GET['idCom'])) {
      if(isset($_GET['id'])){
        $id=$_GET['id'];
      }else{
        $id = $_POST['id'];
      }
      $idCom = clear_input($_GET['idCom']);
      ComentarioManager::delete($idCom);
    }else{
      if(isset($_GET['id'])){
        $id=$_GET['id'];
      }else{
        $id = $_POST['id'];
      }
    }
    
  }
  if (isset($_POST) && $_POST['comentario'] != "") {
    $comentario = clear_input($_POST['comentario']);
    ComentarioManager::insert($comentario,date("Y-m-d H:i:s"),$_SESSION['ID'],$id);
  }
  $id_user = $_SESSION['ID'];
  $datosPublicacion = PublicacionManager::getById($id);
  if (count($datosPublicacion) == 0) {
    header("Location:page404.php");
    die;
  }
  $fav = PublicacionFavoritaManager::getByIdPublicacion($id,$id_user);
  $com = ComentarioManager::getAll($datosPublicacion['ID_PUBLI']);

  if($fav == null){
    $favoritos = 'null';
  }else{
    $favoritos = $fav[0]['ID_PUBLI_FAV'];
  }
  
    

?>



<div class="d-flex flex-column text-white bg-dark">
<div class=" text-white bg-dark">
  <figure class="d-flex justify-content-center"><img src="<?=$datosPublicacion['IMAGEN']?>" alt="" class="w-25"></figure>
  <div class="d-flex justify-content-center">
    <div>
      <h1><?= $datosPublicacion['TITULO']?> &nbsp;</h1>
    </div>
    <div class="d-flex flex-column">
      <?php if ($_SESSION["ID"] != null) {
        if($fav == null){ ?>
          <label for="agregar"> <i class="fas fa-angry " id="imagen"></i></label>
          <input type="checkbox" id="agregar" name="noFavorito" value="noFavorito" class="noFavorito d-none">
        <?php }else{?>
          <label for="quitar"> <i class="fas fa-grin-stars" id="imagen"></i></label>
          <input type="checkbox" id="quitar" name="Favorito" value="Favorito" class="favorito d-none">
        <?php }
      }?>
      <p id="cuenta">Likes: <?=PublicacionFavoritaManager::getByIdPublicacionContar($datosPublicacion['ID_PUBLI'])[0]['CUENTA']?></p>
    </div>
  </div>
  
  
  
  <div class="rutinaCabecera">
    <p> <span class="negrita">Autor:</span><?= $datosPublicacion['AUTOR']?></p>
    <p> <span class="negrita">Categoría:</span><?= $datosPublicacion['CATEGORIA']?></p>
    <p> <span class="negrita">Descripción:</span><?= $datosPublicacion['DESCRIPCION']?></p>
  </div>
   <?php if ($_SESSION["ID"] != null) { ?>
  <div class="contenedor1">
      <input id="btn1" class="toggle1" type="checkbox">
      <label for="btn1" class="lbl-toggle1">Añadir comentario </label>
      <div class="contenido-esconder1 text-center">
          <div class="contenido">
            <form action="publicacion.php?id=<?=$id?>" method="post">
              <textarea name="comentario" id="comentario" rows="8" ></textarea><br>
              <button class="btn btn-light rounded mt-3 ">Enviar</button>
            </form>
          </div>
      </div>
  </div>
<?php } ?>

  <?php foreach ($com   as $comentario) { ?>
    <div class=" d-flex  flex-column btn-light text-dark p-3 rounded">
      <div class="d-flex titulo justify-content-between">
        <h5><?=UsuarioManager::getById($comentario['ID_COMENTARIO_USUARIO'])['NOMBRE']?>
        <?php if ($_SESSION['ID'] === $comentario['ID_COMENTARIO_USUARIO']) { ?>
          <a href="editarComentario.php?idCom=<?= $comentario['ID_COM']?>">📝 </a>
          <a href="publicacion.php?id=<?=$id?>&idCom=<?= $comentario['ID_COM']?>">🗑️ </a>
        <?php } ?>
        </h5>
        <p><?=$comentario['FECHA']?></p>
      </div>
      <div  data-id="<?=$comentario['ID_COM']?> ">
        <p><?= $comentario['CONTENIDO']?></p>
      </div>
      <hr>
  </div>
 <?php } ?>
</div>
</div>
<script type="text/javascript">

  let favorito = document.querySelector('label');
  let favoritos = <?=$favoritos?>;
  let fav = [];
  fav[0] = favoritos || 'null';

  $(favorito).click(function(){

    let id_publicaion = <?=$datosPublicacion['ID_PUBLI']?>;
    let id_user = <?=$id_user?>;
    
    $.ajax(
      {
        url : 'AJAXPublicacionFav.php',
        type: "GET",
        data : {"fav": fav[0],"id_user": id_user,"id_publicacion": id_publicaion}
      })
        .done(function(data) {
          fav = data.trim().split(',');
          let im =  document.getElementById('imagen');
          if (fav[0] != 'null') {
            im.className="fas fa-grin-stars";
          }else{
            im.className="fas fa-angry";
          }
          let p =  document.getElementById('cuenta');
          p.innerHTML = 'Likes: '+ fav[1];
        })
        .fail(function(data) {
          console.log(data);
          alert( "error" );
        });
});

</script>
