<?php
  //OBTENER ID del USER
   if ( isset($_SESSION['ID']) ){
     $id = $_SESSION['ID'];
     $user = UsuarioManager::getByID($id);
     //SI es ADMIN
     if( isset($user) && $user['ROL'] === 'ADMIN'){
       $usuarios = UsuarioManager::getAll();
       $publicaciones = PublicacionManager::getAll();
       //Obtenemos todos los datos de la BBDD
     }
     //SINO AL INICIO
   }else{
     header('Location: principal.php');
     die();
   }
?>
<div class="tablas">
  <div>
    <h2>Usuarios</h2>
    <div>
      <div class="tablaUsuarios">
    <table border="1px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th class="ocultar">Email</th>
          <th>Rol</th>
          <th>Cambiar Rol</th>
          <th>Borrar Usuario</th>
        </tr>
      </thead>
      <tbody>
    <?php foreach ($usuarios as $fila) { ?>
      <tr>
        <td><?=$fila['ID_USU']?></td>
        <td><?=$fila['NOMBRE']?></td>
        <td class="ocultar"><?=$fila['EMAIL']?></td>
        <td><?=$fila['ROL']?></td>
        <td>
          <?php
                if($_SESSION['ID'] != $fila['ID_USU']){
          ?>
          <a href="cambiarROL.php?id_usuario=<?=$fila['ID_USU']?>">Cambiar Rol</a>
          <?php } ?>
        </td>
        <td>
          <?php
                if($_SESSION['ID'] != $fila['ID_USU']){
          ?>
          <a href="borrarADMIN.php?id_usuario=<?=$fila['ID_USU']?>"><img id="basura" src="imagenes/papelera.png"></a>
        <?php } ?>
      </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
  </div>


  <div>
    <h2>Publicación</h2>
    <div>
      <a href="subirPublicacion.php"><img id="basura" src="imagenes/papelera.png" alt="Editar publicacion"></a>
    </div>
    <div>
      <div class="tablaRecetas">
    <table border="1px">
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Borrar Publicación</th>
        </tr>
      </thead>
      <tbody>
    <?php foreach ($publicaciones as $fila) { ?>
      <tr>
        <td><?=$fila['ID_PUBLI']?></td>
        <td><?=$fila['TITULO']?></td>
        <td>
          <a href="editarPublicacion.php?id_publi=<?=$fila['ID_PUBLI']?>"><img id="basura" src="imagenes/papelera.png" alt="Editar publicacion"></a>
          <a href="borrarADMIN.php?id_publi=<?=$fila['ID_PUBLI']?>"><img id="basura" src="imagenes/papelera.png" alt="Borrar"></a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
  </div>
</div>
