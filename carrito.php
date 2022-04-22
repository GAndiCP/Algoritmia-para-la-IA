<?php
  include("connection.php");
  $id=$_GET['id'];
  $consulta="call usp_Join2($id)";
  $respuesta=mysqli_query($con,$consulta);
  $read=mysqli_fetch_assoc($respuesta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>TECHNO-CITY|Carrito</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css1/style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Sección de encabezado
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <!--<a href="#hero"><img src="img/espiral.png" alt="" title="" /><h>TECHNO CITY</h></img></a>-->
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <h1><a href="#hero"><font face="courier">Techno-City</a></font></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">Carrito</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Bienvenido al carrito de compras</h3>
          <div class="section-title-divider"></div>
          <h7><p class="section-description">Tu producto se encuentra aqui</p></h7>
        </div>
      </div>
    </div>
    
    <form action="carrito2.php" method="POST">
        
        <div class="container about-container wow fadeInUp">
        <image src="img/<?php echo $read['Imagen'] ?>" height="500" width="500">
        <div class="row">
            <div class="col-md-6 col-md-push-6 about-content">
               
            <h2 class="about-title"><?php echo $read['Marca'] ?>&nbsp<?php echo $read['Modelo'] ?></h2>
            <p class="about-text">
                <p><b>Procesador:</b>&nbsp&nbsp<input class="sinborde1" type="text" name="txtpo" readonly onmousedown="return false" value="<?php echo $read['Procesador'] ?>" /></p>
                <p><b>Ram:</b>&nbsp&nbsp<input class="sinborde2" type="text" name="txtra" readonly onmousedown="return false" value="<?php echo $read['Ram'] ?>" /></p>
                <p><b>Tarjeta grafica:</b>&nbsp&nbsp<input class="sinborde3" type="text" name="txtta" readonly onmousedown="return false" value="<?php echo $read['tarjetaGrafica'] ?>" /></p>
                <p><b>Vram:</b>&nbsp&nbsp<input class="sinborde4" type="text" name="txtvr" readonly onmousedown="return false" value="<?php echo $read['Vram'] ?>" /></p>
                <p><b>Tipo de disco duro:</b>&nbsp&nbsp<input class="sinborde5" type="text" name="txtti" readonly onmousedown="return false" value="<?php echo $read['discoDuro'] ?>" /></p>
                <p><b>Capacidad de disco:</b>&nbsp&nbsp<input class="sinborde6" type="text" name="txtca" readonly onmousedown="return false" value="<?php echo $read['discoCapacidad'] ?>"/></p>
            </p>
            <div class="form-group">
                <p><b></b></p><input type="hidden" class="form-control" name="txtid" id="cant" value="<?php echo $read['idProducto'] ?>" />
                <p><b>Cantidad:</b></p><input type="text" class="form-control" name="txtcant" id="cant" value=1 data-rule="minlen:1" data-msg="La cantidad minima es de 1 producto" />
                <div class="validation"></div>
                </div>
            <p class="about-text">
            <p><b>Precio:</b>&nbspS/.&nbsp<font color="#03C4EB" size="20"><input class="sinborde" type="text" name="txtprecio" readonly onmousedown="return false" value="<?php echo round($read['precio'],2) ?>" /></font></p>
            </p>
            </div>
        </div>
        <br><br><br>
        &nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<button class="btn btn-skin">Comprar</button>&nbsp&nbsp&nbsp&nbsp
    </form>
    <a href="indexx.php" class="btn btn-skin">Regresar</a>
    <br><br>
  </section>
  <br><br><br><br><br><br>
  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">

            &copy; Copyright <strong>Empresa Techno-City</strong>. Todos los derechos reservados
          </div>
          <div class="credits">
        
            Desarrollado por: <a href="https://github.com/GAndiCP"><font color="#3bbec0">Developer-G</font></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
