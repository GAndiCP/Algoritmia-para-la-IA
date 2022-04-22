<?php
  include("connection.php");
  $consulta="call usp_Select()";
  $respuesta=mysqli_query($con,$consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>TECHNO-CITY|Compra</title>
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
<header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <!--<a href="#hero"><img src="img/espiral.png" alt="" title="" /><h>TECHNO CITY</h></img></a>-->
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <h1><a href="#hero"><font face="courier">Techno-City</a></font></h1>
      </div>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <br><br><br><br><br>
<center>
    <i class="fa fa-check-circle"></i>
   <h1>Su compra se ah realizado con exito, vuelva pronto.</></h1>
</center>
<body>
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">idFactura</th>
      <th scope="col">idProducto</th>
      <th scope="col">imagen</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <?php
     $read=mysqli_fetch_assoc($respuesta)
  ?>
  <tbody>
    <tr>
      <td><?php echo $read['idFactura'] ?></td>
      <td><?php echo $read['idProducto'] ?></td>
      <td><image src="img/<?php echo $read['Imagen'] ?>" height="110" width="120"></td>
      <td><?php echo $read['Marca'] ?></td>
      <td><?php echo $read['Modelo'] ?></td>
      <td><?php echo $read['Cantidad'] ?></td>
      <td>S/&nbsp<?php echo round($read['Precio'],2) ?></td>
      <td>S/&nbsp<?php echo round($read['Total'],2) ?></td>
    </tr>
  </tbody>
</table>
<br><br><br><br><br>
<center> 
<form action="indexx.php" method="POST">    
<button class="btn btn-skin">Regresar a inicio</button>
</form><br>
<button class="btn btn-skin" onclick="window.print()">Imprimir</button>
</center>
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