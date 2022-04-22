<?php
  include("connection.php");
  $consulta="call usp_Join1()";
  $respuesta=mysqli_query($con,$consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>TECHNO-CITY|Tienda online</title>
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
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
           <a href="#hero"><b><font face="courier" size=30>Developer-G</font></a></b>
        </div>

        <h1>BIENVENIDO A TECHNO-CITY</h1>
        <h2>Encuentra <span class="rotating">calidad, precios justos, varidad de productos</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">¡Vamos para allá!</a>
        </div>
      </div>
    </div>
  </section>

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
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Productos</a></li>
          <li><a href="#testimonials">Comentarios</a></li>
          <li><a href="#contact">Contactanos</a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
          <li><a href="login.php">Login</a></li>
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
          <h3 class="section-title">Nosotros</h3>
          <div class="section-title-divider"></div>
          <h7><p class="section-description">Aquí podras saber un poco mas de nosotros</p></h7>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">Quienes somos y a que nos dedicamos</h2>
          <p class="about-text">
            Somos una empresa peruana dedicada a la venta de productos tecnologicos, con mas de 10 años de experiencia en el mercado trayendo los mejores productos tecnologicos para hacer tu vida
            mucho mas sencilla y agradable
          </p>
          <p class="about-text">
            Nuestros productos son importados del extranjero y de ultima generacion, tenemos un stock variado de productos, ademas de buenas ofertas disponibles todos los meses

          </p>
          <p class="about-text">
          <b><font color="black">ATTE:</b></font> <font color="#03C4EB">Gerente general de TechnoCity</font>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Productos</h3>
          <div class="section-title-divider"></div>
          <h7><p class="section-description">En esta seccion podras ver nuestro gran stock de productos</p></h7>
        </div>
      </div>
      <?php
        while($read=mysqli_fetch_assoc($respuesta))
        {
      ?>
      <div class="text-center">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInLeft" data-wow-delay="0.2s">
                 <div class="service-box">
                    <img src="img/<?php echo $read['Imagen'] ?>" height="250" width="270"/>
                  </div>
                    <div class="service-desc">
                      <h5><?php echo $read['Marca'] ?></h5>
                      </p><b><?php echo $read['Modelo'] ?>/<?php echo $read['Procesador'] ?>/<?php echo $read['Ram'] ?>/<?php echo $read['discoDuro'] ?>/<?php echo $read['discoCapacidad'] ?></b></p>
                      </p>precio:&nbsp&nbsp&nbsp<font size="20"><b>S/.&nbsp<?php echo $read['precio'] ?></b></font></p>
                      <a href="carrito.php?id=<?php echo $read['idProducto'] ?>" class="btn btn-skin">Agregar al carrito</a>
                    </div>
                  </div>
               </div>
             </div>
           </div>
         </div>
      <?php 
        }
      ?>
      </div>
  </section>
  <br>
  <!--==========================
  Subscrbe Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Suscribete para mas actualizaciones</h3>
          <p class="subscribe-text">Mas de 1000+ personas ya estan suscritas y disfrutando de nuevas experiencias con nosotros, ¿Y tu que esperas?</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="registro.php">Suscribirme</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Porfolio Section
  ============================-->
  
  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Comentarios destacados</h3>
          <div class="section-title-divider"></div>
          <h7><p class="section-description">Comentarios de clientes mas frecuentes </p></h7>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/sideral.png" alt=""></div>
            <h4>Adrian Sangama</h4>
            <span>Cliente</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Mi experiencia en esta pagina fue una de las mejores en mi vida, no solo por el diseño llamativo, sino tambien por sus produtos de calidad, buenos precios, atencion al cliente las 24 horas del dia y sobre todo que los pedidos llegan a mi domicilio de manera puntual y en buen estado ¡MARAVILLOSO!. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Por lo general cuando se trata de de compras online tiendo a tener mucha desconfianza, incluso reniego demasiado pero esta pagina cumple con todos los estandares en el cual estoy acostumbrado como cliente. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/leon.png" alt=""></div>
            <h4>Cristhian Custodio</h4>
            <span>Cliente</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--==========================
  Team Section
  ============================-->

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contactanos</h3>
          <div class="section-title-divider"></div>
          <h7><p class="section-description">Contactate con nosotros para realizar cualquier consusta respecto a su experiencia en esta pagina</p></h7>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Av. Wiesse-Estacion Santa Rosa<br>Lima, Peru</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+51 924932566</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Tu mensaje ah sido enviado con exito. Muchas gracias!</div>
            <div id="errormessage"></div>
            <form action="#contact" method="post" role="form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Tema" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
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
