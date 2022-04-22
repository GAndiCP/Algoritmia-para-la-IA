<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>TECHNO-CITY|Validar</title>
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

<div id="preloader"></div>
  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Validar tarjeta</h3>
          <div class="section-title-divider"></div>
          <h7><p class="section-description">Inserta los datos requeridos para continuar con la compra</p></h7>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-user-circle"></i>
              <p>Nombres de propietario:</p>
            </div>

            <div>
              <i class="fa fa-lock"></i>
              <p>Numero de la tarjeta:</p>
            </div>

            <div>
              <i class="fa fa-calendar"></i>
              <p>Expiracion-mes:</p>
            </div>
            <div>
              <i class="fa fa-calendar"></i>
              <p>Expiracion-año:</p>
            </div>

            <div>
              <i class="fa fa-lock"></i>
              <p>CVV:</p>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Tus datos se guardaron correctamente.</div>
            <div id="errormessage"></div>
            <form action="validacion2.php" method="POST" role="form">
              <div class="form-group">
                <input type="text" name="txtnames" class="form-control" id="nombres" placeholder="Ingrese nombres" data-rule="minlen:8" data-msg="Por favor ingrese al menos 8 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="txtnum" id="num" placeholder="Ingrese numero de tarjeta" data-rule="minlen:16" data-rule="maxlen:16" data-msg="Por favor ingrese 16 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <select class="form-control" name="txtmes" id="mes" placeholder="Ingrese mes de expiracion" data-msg="Elige una opcion" >
                    <option value=""></option>
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
                    <option value="Abril">Abril</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Junio">Junio</option>
                    <option value="Julio">Julio</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Septiembre">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="Noviembre">Noviembre</option>
                    <option value="Diciembre">Diciembre</option>
                </select>    
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <select name="txtaño" class="form-control" id="año" placeholder="Ingrese año de expiracion" data-msg="Elige una opcion" >
                   <option value=""></option>
                   <option value="2022">2022</option>
                   <option value="2023">2023</option>
                   <option value="2024">2024</option>
                   <option value="2025">2025</option>
                   <option value="2026">2026</option>
                </select>
               </select>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="txtcvv" id="cvv" placeholder="Ingrese CVV" data-rule="minlen:3" data-rule="maxlen:3" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <br><br><br>
              <div class="text-center"><button type="submit">Validar Compra</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

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
