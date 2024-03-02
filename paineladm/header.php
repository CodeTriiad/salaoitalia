<?php
include_once('config/conexao.php');
include_once('config/session/session.php');
include_once('config/function.php');
session_start();
?>
    <!DOCTYPE html>
    <html lang="pt">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Code Triad </title>
      <link rel="stylesheet" href="vendors/feather/feather.css">
      <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
      <link rel="stylesheet" href="vendors/typicons/typicons.css">
      <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
      <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
      <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
      <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
      <link rel="stylesheet" href="css/vertical-layout-light/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <link rel="shortcut icon" href="images/scissors-svgrepo-com.svg"/>
      <link rel="stylesheet" href="css/administracao.css">
    </head>
    <body class="with-welcome-text">
      <div class="container-scroller">
    </div> 
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-20 p-0 fixed-top d-flex align-items-top flex-row" id="nav-header">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize" >
                <span class="icon-menu"></span>
              </button>
            </div>
            <div>
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="images/scissors-svgrepo-com.svg" alt="logo" />
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="images/scissors-svgrepo-com.svg" alt="logo" />
              </a>
            </div>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-top"> 
            <ul class="navbar-nav">
              <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text" id="saudacao"></h1>
                <h3 class="welcome-sub-text">Seja bem-vindo ao painel administrativo</h3>
              </li>
            </ul>
            </ul>
            <ul class="navbar-nav ms-auto">

              <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="img-xs rounded-circle" src="images/faces/<?php fotoBarbeiro();?>" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="images/faces/<?php fotoBarbeiro();?>" alt="Profile image">
                    <p class="mb-1 mt-3 font-weight-semibold"><?php nomeBarbeiro(); ?></p>
                    <p class="fw-light text-muted mb-0"><?php emailBarbeiro(); ?></p>
                  </div>
                  <a  href="perfil" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Meu perfil <span class="badge badge-pill badge-danger">!</span></a>
                  <form method="POST" action="config/login/logout"><a href="" class="dropdown-item" name ="logout"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i> Sair</a></form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>