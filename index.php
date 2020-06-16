<?php
include "configuracion/configuracion.php";
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.6, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.6, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section form1 cid-rzadg2nIVF mbr-parallax-background" id="form1-v">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: #154120;">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8"><br><br><br>
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong><em>VAN DOS Y VUELVEN TRES</em></strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><strong><em>
                    </em></strong></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="index.php" method="POST" class="mbr-form form-with-styler">
                    <div class="row">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-v" class="form-control-label mbr-fonts-style display-7"><strong><em>USUARIO</em></strong></label>
                            <input type="text" name="usuario" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-v">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-v" class="form-control-label mbr-fonts-style display-7"><strong><em>CONTRASEÑA</em></strong></label>
                            <input type="password" name="pass" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-v">
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><br>
                          <button type="submit" class="btn btn-form btn-success display-4"name="boton">REGISTRAR</button></div><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </form><!---Formbuilder Form--->
                <?php
                if(isset($_POST["boton"])){
                $usuario=trim($_POST['usuario']);
                $pw=trim($_POST['pass']);
                $Query = "SELECT * FROM usuario WHERE usuario='".$usuario."' AND password='".$pw."'AND activo=1;";
                $resultado = $conexion->query($Query);
                if (mysqli_num_rows($resultado)>0)
                {
                  $rows = $resultado->fetch_array();
                  session_start();
                  $_SESSION["usuario"]=$rows[1];
                  if ($rows[3]=="1")header ("Location: registro/registro.php");
                  if ($rows[3]=="2")header ("Location: menu/menu2.php");
                  if ($rows[3]=="3")header ("Location: menu/menu3.php");
                }
                else
                {
                  echo "<script>aleart('DATOS INCORRECTOS....');</script>";
                }
            }
            ?>
            </div>
        </div>
    </div>
</section>


  <section class="engine"><a href="https://mobirise.info/j">CREADO POR ROJAS</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>

