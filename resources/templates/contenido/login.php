<?php
$errores = [];
$info = ['USUARIO' => '','CONTRASEÑA' => '',];
if( count($_POST) > 0 ){
  gestionaErrores($_POST, $info, $errores);
    if($errores == null ){
      $datos = UsuarioManager::autentificado($info['USUARIO']);

      if( $datos != null && password_verify($info['CONTRASEÑA'], $datos['PASS']) ){
        $id = $datos['ID_USU'];
        $_SESSION['autentificado'] = true;
        $_SESSION['ID'] = $id;
        //consulta para sacar el rol de dicho usuario
        $usuario = UsuarioManager::getById($id);
        $_SESSION['ROL'] = $usuario['ROL'];
        //RECUERDAME
        if( isset($_POST['recuerdame']) && $_POST['recuerdame'] == true ){
          //generamos un token y lo convertimos a hash
          $token = TokenManager::getToken();
          //insertamos el token en la base de datos 
          CookieManager::insert($token, $id);
          //se establece la cookie de recuerdame para una semana
          setcookie('recuerdame', $token, time()+(24*60*60*7));
        }
        header("Location:principal.php");
        die();
      }else{
        $errores['db'] = 'El usuario o la contraseña no estan registrados';
      }
    }
  } 


?>
<div class="w-100 d-flex justify-content-center">
 <div class="login p-3 bg-light h-auto rounded">
   <form  action="login.php" method="post" >
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark" id="basic-addon1"><i class="fas fa-user text-white"></i></span>
      </div>
      <input type="text" name="USUARIO" value="<?=$info['USUARIO']?>" placeholder="Introduce tu nombre">
       <?php if( isset($errores['USUARIO'])) { ?>
         <br><span class='error'><?=$errores['USUARIO']?></span><br>
       <?php } ?>
    </div>
   <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text bg-dark" id="basic-addon1"><i class="fas fa-key text-white"></i></span>
      </div>
      <input type="password" name="CONTRASEÑA" value="" placeholder="Introduce tu contraseña">
      <?php if( isset($errores['CONTRASEÑA'])) { ?>
        <br><span class='error'><?=$errores['CONTRASEÑA']?></span><br>
      <?php } ?>
    </div>
   <label for="recuerdame">Recuerdame</label> <input type="checkbox" name="recuerdame" value="true" id="recuerdame">
   <br>
   <a href="recuperarPass.php" id="olvidadoContraseña" class="">¿Has olvidado tu contraseña?</a>
   <br>
   <br>
   <input type="submit" name="enviar" value="Enviar" class="btn btn-dark text-white m-2"> <br>
   <a href="registrate.php" id="registrate" class="btn text-white btn-dark">Registrate</a>

    <?php if( isset($errores['db'])) { ?>
      <br><br><span class='error'><?=$errores['db']?></span><br>
    <?php } ?>
   </form>
 </div>
</div>