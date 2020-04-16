<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MediHub - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>Clínica Serrano</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
   <!--  <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inline inc-border">
        <div class="container">
            <div class="row">
                <div class="col-md-12 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> C/ Alcalde José Luís Lassaletta, 17, 03008 Alicante
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i> info@serranoclinica.com
                            </li>
                            <li>
                                <i class="fas fa-phone"></i> +633 528 982
                            </li>
                        </ul>
                    </div>

                    <div class="widget social">
                  
                    <ul class="link">
                        <li  style="margin-right: 10px " href="#" class="facebook"><a href="https://www.facebook.com/Clinica-Serrano-113104543431523/"><i class="fab fa-facebook-f"></i></a></li>
                        <li style="margin-right: 10px " href="#" class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Header Top -->


    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
              <!--   <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>   -->      
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo" alt="Logo" height="50">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    

                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="dropdown active">
                            <a style="margin-top: 1.4px;" href="<?= base_url() ?>" >Inicio</a>
                            </li>
                        <li>
                            <a style="margin-top: 1.4px;" href="<?= base_url() ?>#clinica">La clínica</a>
                        </li>
                           <li class="dropdown">
                            <a href="<?= base_url() ?>#servicios" class="dropdown-toggle active" data-toggle="dropdown" >Servicios</a>
                            <ul class="dropdown-menu">
                               


                                 <li class="dropdown">
                                    <a href="<?= base_url('fisioterapia') ?>" class="dropdown-toggle" data-toggle="dropdown" >FisioTerapia</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= base_url('epi') ?>">EPI</a></li>
                                        <li><a href="<?= base_url('nmp-e') ?>">NMP-E</a></li>
                                        <li><a href="<?= base_url('ecografia') ?>">ECOGRAFIA</a></li>
                                        <li><a href="<?= base_url('tecarterapia') ?>">TECARTERAPIA</a></li>
                                        <li><a href="<?= base_url('terapiaManual') ?>">TERAPIA MANUAL</a></li>
                                        <li><a href="<?= base_url('FisioterapiaRespiratoria') ?>">FisioTerapia Respiratoria</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?= base_url('osteopatia') ?>">Osteopatia</a></li>
                                <li><a href="<?= base_url('podologia') ?>">Podologioa</a></li>
                                <li><a href="<?= base_url('nutricion') ?>">Nutrición</a></li>
                                <li><a href="<?= base_url('pilatesTerapeutico') ?>">Pilates Terapéutico</a></li>
                                <li><a href="<?= base_url('gimnasiaAbdominalHipopresiva') ?>">Gimnasia Abdominal Hipopresiva</a></li>
                                <li><a href="<?= base_url('ejercicioTerapeutico') ?>">Ejercicio Terapéutico</a></li>
                                <li><a href="<?= base_url('HathaYoga') ?>">Hatha Yoga</a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="<?= base_url('') ?>#equipo">Equipo</a>
                        </li>
                        <li>
                            <a href="<?= base_url('blog') ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?= base_url('contacto') ?>">Contacto</a>
                        </li>

                            <li>
                            <a href="<?= base_url('galeriaImagenes') ?>">Galeria</a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <!-- <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">About Us</h4>
                    <p>
                        Arrived compass prepare an on as. Reasonable particular on my it in sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind.
                    </p>
                </div>
                <div class="widget">
                    <h4 class="title">Our Department</h4>
                    <ul>
                        <li><a href="#">Eye Treatment</a></li>
                        <li><a href="#">Children Chare</a></li>
                        <li><a href="#">Traumatology</a></li>
                        <li><a href="#">X-ray</a></li>
                    </ul>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div> -->
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->