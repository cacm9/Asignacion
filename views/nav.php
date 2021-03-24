<?php

?>

<!DOCTYPE html>
<html lang="es">


<!-- Mirrored from html.codedthemes.com/datta-able/bootstrap/default/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Dec 2018 16:38:47 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<!-- /Added by HTTrack -->

<head>
    <title>The Fitness Club - Granada</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."/>
    <meta name="keywords"
          content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="../public/assets/img/favicon.svg" type="image/x-icon" sizes="16x16">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="../public/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../public/assets/plugins/animation/css/animate.min.css">
    <!--  estilos para la subida de imagen con el dropify-->
    <link rel="stylesheet" href="../public/assets/plugins/dropify/dist/css/dropify.min.css">
    <!--alerts CSS -->
    <link href="../public/assets/plugins/sweetalert/css/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- select2 css -->
    <link rel="stylesheet" href="../public/assets/plugins/select2/css/select2.min.css">
    <!-- multi-select css -->
    <link rel="stylesheet" href="../public/assets/plugins/multi-select/css/multi-select.css">
    <!-- data tables css -->
    <link rel="stylesheet" href="../public/assets/plugins/data-tables/css/datatables.min.css">
    <!-- bootstrap-tagsinput-latest css -->
    <link rel="stylesheet" href="../public/assets/plugins/bootstrap-tagsinput-latest/css/bootstrap-tagsinput.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="../public/assets/css/layouts/dark.css">

</head>

<body>

<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar brand-yellow navbar-image-1 navbar-dark active-yellow title-yellow menu-item-icon-style4 icon-colored "
     id="controlNav">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="" class="b-brand">
                <span class="b-title-hide"><img src="../public/assets/img/logos/logo-icon-thefitnessclub-black.svg"
                                                alt=""></span>
                <span class="b-title"><img src="../public/assets/img/logos/logo-thefitnessclub-black.svg" alt=""></span>
            </a>
            <a class="mobile-menu text-warning" id="mobile-collapse" href="javascript:"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Escritorio</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                    <a href="escritorio.php" class="nav-link">
                            <span class="pcoded-micon">
                                <i class="feather icon-monitor"></i>
                            </span>
                        <span class="pcoded-mtext">Administracion General</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Actualizacion</label>
                </li>
                <li data-username="Facturar Productos" class="nav-item">
                    <a href="venta.php" class="nav-link">
                            <span class="pcoded-micon">
                                <i class="feather icon-refresh-ccw"></i>
                            </span>
                        <span class="pcoded-mtext">Asignacion Externa</span>
                    </a>
                </li>
                <li data-username="Facturar Membresias" class="nav-item">
                    <a href="ventaMembresias.php" class="nav-link">
                            <span class="pcoded-micon">
                                <i class="feather icon-refresh-ccw"></i>
                            </span>
                        <span class="pcoded-mtext">Asignacion Interna</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Carga Masiva</label>
                </li>
                <li data-username="Carga de Gestiones" class="nav-item">
                    <a href="import.php" class="nav-link">
                            <span class="pcoded-micon">
                                <i class="feather icon-upload"></i>
                            </span>
                        <span class="pcoded-mtext">Carga de Gestiones</span>
                    </a>
                </li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Administracion</label>
                </li>
               
                <li data-username="Menu levels Menu level 2.1 Menu level 2.2" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span
                                class="pcoded-mtext">Usuarios</span></a>
                    <ul class="pcoded-submenu">
                        <li class=""><a href="usuarios.php" class="">Administrar Usuarios</a></li>
                        <li class=""><a href="perfiles.php" class="">Administrar Perfiles</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Configuraciones</label>
                </li>
                <li data-username="Configuraciones Generales" class="nav-item">
                    <a href="configuracionesgenerales.php" class="nav-link">
                            <span class="pcoded-micon">
                                <i class="fa fa-cog"></i>
                            </span>
                        <span class="pcoded-mtext">Configuraciones Generales</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->