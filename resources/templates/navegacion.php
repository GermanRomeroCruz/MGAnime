<?php
  $uri = $_SERVER['REQUEST_URI'];
  //obtenemos id del usuario
  if(isset($_GET['ID'])){
    $id = intval($_GET['ID']);
  }
  $admin = "ADMIN";
  $usuario = UsuarioManager::getById($_SESSION['ID']);
  $mensaje = false;
  if(count($usuario) != 0){
    $mensaje = true;
  }
?>
<link rel="stylesheet" href="/css/header.css">
<header>
  <nav class="navigation sombraNav">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <a href="principal.php">
          <img src="imagenes/MGAnime-1.png" alt="" id="imagenLogo">
        </a>
      </div>
      <form method="post" action="resultadosBusqueda.php">
        <input type="text" name="busqueda" placeholder="¿Qué quieres buscar?">
        <input type="submit" name="buscar" value="&#128270;">
      </form>
    </div>
    <figure class="menu-icon">
      <img src="/imagenes/menu.png" alt="">
    </figure>
    <ul>
      <li><a href="principal.php">Inicio</a></li>
      <?php if(isset($_SESSION['autentificado']) && $_SESSION['autentificado'] == true ){ ?>

        <li><a href="correoPeticiones.php">Sugerencia</a></li>
        <li><a href="perfil.php">Perfil</a></li>
        <?php if(isset($_SESSION['ROL']) && $_SESSION['ROL'] == $admin ){ ?>
          <li><a href="admin.php">Admin</a></li>
        <?php }?>
        <li><a href="principal.php?cerrarSesion=true"  id='perfil'>Logout</a></li>
      <?php } elseif($uri != '/login.php'){?>
        <li><a href="login.php">Login</a></li>
      <?php }?>
    </ul>
  </nav>
</header>
<script type="text/javascript">
    let menuBtn = document.getElementsByClassName('menu-icon')[0];
    let menu = document.querySelector('ul');
    menuBtn.addEventListener('click', mostrarMenu);
    function mostrarMenu(){
      let obtenerAtributo = menu.getAttribute('class');
      console.log(obtenerAtributo);
      if(obtenerAtributo === 'show'){
        menu.removeAttribute('class');
      }else{
        menu.setAttribute('class','show');
      }
    }
</script>
