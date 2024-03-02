<?php
include_once('config/conexao.php');
include_once('config/session/session.php');
?>
?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Code Triad </title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="vendors/feather/feather.css">
      <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
      <link rel="stylesheet" href="vendors/typicons/typicons.css">
      <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
      <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
      <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <link rel="stylesheet" href="css/vertical-layout-light/style.css">
      <!-- endinject -->
      <link rel="shortcut icon" href="images/favicon.png" />
    </head>
    <body class="with-welcome-text">
      <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner"> 
          <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
              <div class="ps-lg-3">
                <div class="d-flex align-items-center justify-content-between">
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="ti-home me-3 text-white"></i></a>
                <button id="bannerClose" class="btn border-0 p-0">
                  <i class="ti-close text-white"></i>
                </button>
              </div>
            </div>
          </div>
        </div> 
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
              </button>
            </div>
            <div>
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="images/logo.svg" alt="logo" />
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="images/logo-mini.svg" alt="logo" />
              </a>
            </div>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-top"> 
            <ul class="navbar-nav">
              <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Boa noite, <span class="text-black fw-bold"></span></h1>
                <h3 class="welcome-sub-text">Seja bem vindo ao painel administrativo </h3>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                  <span class="input-group-addon input-group-prepend border-right">
                    <span class="icon-calendar input-group-text calendar-icon"></span>
                  </span>
                  <input type="text" class="form-control">
                </div>
              </li>
              <li class="nav-item">
                <form class="search-form" action="#">
                  <i class="icon-search"></i>
                  <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                </form>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="icon-mail icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                  <a class="dropdown-item py-3 border-bottom">
                    <p class="mb-0 font-weight-medium float-left">Você possui 4 mensagens </p>
                    <span class="badge badge-pill badge-primary float-right">Veja todas</span>
                  </a>
                  <a class="dropdown-item preview-item py-3">
                    <div class="preview-thumbnail">
                      <i><img src="images/faces/face10.jpg" alt=""></i>
                    </div>
                    <div class="preview-item-content">
            
                      <h6 class=" fw-normal text-dark mb-1">Duduzin T.i</h6>
                      <p class="fw-light small-text mb-0"> Tem um encaixe para mim? kk </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown"> 
                <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="icon-bell"></i>
                  <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                  <a class="dropdown-item py-3">
                    <p class="mb-0 font-weight-medium float-left">Você possui 4 alertas</p>
                    <span class="badge badge-pill badge-primary float-right">Veja todos</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow py-2">
                      <p class="preview-subject ellipsis font-weight-medium text-dark">Duduzin t.i </p>
                      <p class="fw-light small-text mb-0"> Mandou uma mensagem</p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="images/faces/face8.jpg" alt="image" class="img-sm profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow py-2">
                      <p class="preview-subject ellipsis font-weight-medium text-dark">Daniel </p>
                      <p class="fw-light small-text mb-0"> Marcou um corte </p>
                    </div>
                  </a>
    
                </div>
              </li>
              <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                  <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                    <p class="mb-1 mt-3 font-weight-semibold">Daniel Borba</p>
                    <p class="fw-light text-muted mb-0">dev.danielborba@gmail.com</p>
                  </div>
                  <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Meu perfil <span class="badge badge-pill badge-danger">1</span></a>
                  <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Mensagens</a>
                  <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sair</a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_settings-panel.html -->
          
          
          
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-category">Administração</li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <i class="menu-icon mdi mdi-card-text-outline"></i>
                  <span class="menu-title">Agendamentos</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <i class="menu-icon mdi mdi-chart-line"></i>
                  <span class="menu-title">Lucro</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <i class="menu-icon mdi mdi-card-text-outline"></i>
                  <span href="configuracao.php" class="menu-title">Configuração</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
              <li class="nav-item nav-category">help</li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="menu-icon mdi mdi-file-document"></i>
                  <span class="menu-title">Contrato</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-lg-12 col-xs-6">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">CONFIGURAÇÃO SERVIÇO</h4>
                      <p class="card-description">
                        Nome do Serviço
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>NOME</th>
                              <th>VALOR</th>
                              <th>DATA DE CRIAÇÃO</th>
                              <th>STATUS</th>
                              <th>KPI</th>
                            </tr>
                          </thead>
                                                  <?php
                        //consultar no banco de dados
                        $verifica = mysqli_query($mysqli_connection, "SELECT ID, SERVICOS, VALOR, DATA_CRIACAO,SITUACAO FROM SERVICO LIMIT 20") ;
    
                        //Verificar se encontrou resultado na tabela "usuarios"
                        if(($verifica ) AND ($verifica->num_rows != 0))
                            while($row_servico = mysqli_fetch_assoc($verifica)){{?>
                            <?php 
                                echo '<tr>';
                                echo '<td>'. $row_servico['ID'] .'</td>';
                                echo '<td>'. $row_servico['SERVICOS'] .'</td>';
                                echo '<td>'. $row_servico['VALOR'] .'</td>';
                                echo '<td>'. $row_servico['DATA_CRIACAO'] .'</td>';

                               if($row_servico['SITUACAO'] == 1){
                                echo '<td>ATIVO</td>';
                               } else {
                                echo '<td>INATIVO</td>';
                               }  
                               
                               if($row_servico['SITUACAO'] == 1){
                               echo' <td><img src="images/configuracao/circulo_verde.png" alt="" /> <td>';
                               } else {
                               echo '<td><img src="images/configuracao/circulo_vermelho.png" alt="" /> <td>';
                               }
                               
                            }?>
                            <td class="text-center">
                              <form action="insertconfiguracao.php?id=<?php echo $row_servico['ID'];?>" method="POST">
                              <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="delete" id="delete" type="submit">DELETE</button>
                              </form>
                            </td>


                        <?php }?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>            
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Todos direitos reservados </span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-lg-12 col-xs-6">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">ADICIONAR SERVIÇO</h4>
                      <p class="card-description">
                      Configuração
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                                                  <?php
                        //consultar no banco de dados
                        $verifica = mysqli_query($mysqli_connection, "SELECT ID, SERVICOS, VALOR, DATA_CRIACAO,SITUACAO FROM SERVICO LIMIT 20") ;
    
                        //Verificar se encontrou resultado na tabela "usuarios"
                        if(($verifica ) AND ($verifica->num_rows != 0)){
                            while($row_servico = mysqli_fetch_assoc($verifica)){

                        }
                      }
                        ?>
                        </table>
                          <form method="POST" action="insertconfiguracao.php" class="pt-3">
                            <div class="form-group">
                              <h1 class="card-title">NOME
                              <input type="nome" name="nome" class="form-control form-control-lg" id="" placeholder="Nome">
                            </div>
                            <div class="form-group">
                            <h1 class="card-title">VALOR
                              <input type="nome" name="valor" class="form-control form-control-lg" id="" placeholder="Valor ex: 20.00">
                            </div>
                            <div class="form-group">
                            <h1 class="card-title">STATUS
                                  <?php 
                                  $SQL = "SELECT ID, SITUACAO FROM STATUS WHERE ID = 4 OR ID = 5";
                                  $QUERY  = mysqli_query($mysqli_connection, $SQL);
                                  ?>

                              <select type="status" name="status" class="form-control form-control-lg">
                                                <?php
                                                while($situacao = mysqli_fetch_array($QUERY)){  
                                                              
                                                ?>
                                                      

                                                  <option value="
                                                      <?=  $situacao['SITUACAO'] ?>">
                                                      
                                                      <?php echo $situacao['SITUACAO']; ?>


                                                <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <a href="insertconfiguracao.php"><button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="adicionar">Adicionar</button>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>            
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">. </span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
    
      <!-- plugins:js -->
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="vendors/chart.js/chart.min.js"></script>
      <script src="vendors/progressbar.js/progressbar.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/template.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="js/jquery.cookie.js" type="text/javascript"></script>
      <script src="js/dashboard.js"></script>
      <!-- <script src="../../js/Chart.roundedBarCharts.js"></script> -->
      <!-- End custom js for this page-->
    </body>
    
    </html>
    <?php
?>
