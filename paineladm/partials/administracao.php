<?php
include_once('config/conexao.php');
include_once('config/session/session.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    
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
      <link rel="shortcut icon" href="images/favicon.png" />
      <link rel="stylesheet" href="css/classe.css">
    </head>
    <body class="with-welcome-text">
      <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner"> 
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
          <div class="ps-lg-3">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Suporte 24 horas, caso precisar acione nossa equite! </p>
              <a href="https://www.google.com" target="_blank" class="btn me-2 buy-now-btn border-0">Falar com o Suporte</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="ti-close text-white"></i>
            </button>
          </div>
        </div>
      </div>
    </div> 
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row" id="nav-header">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize" >
                <span class="icon-menu"></span>
              </button>
            </div>
            <div>
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="images/logo-semfundo.svg" alt="logo" />
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="images/logo-pequeno.svg" alt="logo" />
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
                  <input type="search" class="form-control" placeholder="Pesquisar algo" title="Pesquisar">
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
                    <p class="mb-1 mt-3 font-weight-semibold">Daniel teste</p>
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
          
          <nav class="sidebar sidebar-offcanvas" id="navbarzin">
            <ul class="nav">
              <li class="nav-item nav-category">Administração</li>
              <li class="nav-item" id="item-nav">
                <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                  <i class="menu-icon mdi mdi-card-text-outline"></i>
                  <span class="menu-title" href="administracao.php">Agendamentos</span>
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
                      <h4 class="card-title">Relatório de agendamento</h4>
                      <p class="card-description">
                        Clientes agendados
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>NOME</th>
                              <th>TELEFONE</th>
                              <th>SERVICO</th>
                              <th>DATA</th>
                              <th>HORA</th>
                              <th>STATUS</th>
                              <th>KPI</th>
                              <th>AGENDAR</th>
                              <th>CONCLUIR</th>
                              <th>BARBEIRO</th>
                            </tr>
                          </thead>
                          
                                                  <?php
                          //consultar no banco de dados
                          $verifica = mysqli_query($mysqli_connection, 
                          "SELECT ID, NOME,TELEFONE, SERVICO, DATA, HORA, 
                          STATUS,BARBEIRO FROM AGENDAMENTO
                          ORDER BY DATA DESC LIMIT 20") ;
      
                          //Verificar se encontrou resultado na tabela "agendamento"
                          if(($verifica ) AND ($verifica->num_rows != 0)){
                              while($row_agendamento = mysqli_fetch_assoc($verifica)){
                                  echo '<tr>';
                                  echo '<td>'. $row_agendamento['NOME'] .'</td>';
                                  echo '<td>'. $row_agendamento['TELEFONE'] .'</td>';
                                  echo '<td>'. $row_agendamento['SERVICO'] .'</td>';
                                  echo '<td>'. implode('/', array_reverse(explode('-',$row_agendamento['DATA']))) .'</td>';
                                  echo '<td>'. $row_agendamento['HORA'] .'</td>';
                                  echo '<td>'. $row_agendamento['STATUS'] .'</td>';
                                  if($row_agendamento['STATUS'] == 'CONCLUIDO'){
                                      echo '<td><img src="images/configuracao/circulo_verde.png" alt="" /> </td>';
                                    } elseif($row_agendamento['STATUS'] == 'AGENDADO') {
                                      echo '<td><img src="images/configuracao/circulo_vermelho.png" alt="" /> </td>';
                                    } else {
                                      echo '<td><img src="images/configuracao/circulo_cinza.png" alt="" /> </td>';
                                      }?>
                                       <td class="text-center">
                                          <form action="insertadministracao.php?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="agendar" id="delete" type="submit">AGENDAR</button>
                                          </form>
                                        </td>
                                        <td class="text-center">
                                          <form action="insertadministracao.php?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="concluir" id="delete" type="submit">CONCLUIR</button>
                                          </form>
                                        </td>
                                      
                                      <?php // echo '<td>delete/update</td>';
                                  echo '<td>'. $row_agendamento['BARBEIRO'] .'</td>';
                                  echo '</tr>';
                                }
                         }?>
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
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
    
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="vendors/chart.js/chart.min.js"></script>
      <script src="vendors/progressbar.js/progressbar.min.js"></script>

      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/template.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <script src="js/jquery.cookie.js" type="text/javascript"></script>
      <script src="js/dashboard.js"></script>
      <script>
        function obterSaudacao() {
            var saudacao = "";
            var agora = new Date();
            var hora = agora.getHours();

            if (hora >= 5 && hora < 12) {
                saudacao = "Bom dia";
            } else if (hora >= 12 && hora < 18) {
                saudacao = "Boa tarde";
            } else {
                saudacao = "Boa noite";
            }

          return saudacao;
        }
        // Atualiza o texto da saudação no elemento HTML
        document.getElementById("saudacao").textContent = obterSaudacao();
    </script>
    </body>
    
    </html>
    <?php
?>
