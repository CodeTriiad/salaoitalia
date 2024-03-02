<?php
include_once('config/conexao.php');
include_once('config/session/session.php');
include_once('config/function.php');
include ('header.php');
include ('sidebar.php');
session_start();
?>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                                              <!-- CRIAÇÃO DE SERVIÇO -->
                <div class="col">
                  <div class="card">
                  <div class="card text-center">
                      <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                          <li class="nav-item">
                            <a class="nav-link " href="log">AGENDAMENTOS EXCLUIDOS</a>
                          </li>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">AGENDAMENTOS</h4>
                    <p class="card-description">
                    <div id="mensagem-erro" style="color: red;"><h3>EXCLUIDOS</div>
                      </p>
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>NOME</th>
                                <th>DATA</th>
                                <th>SERVICO</th>
                                <th>STATUS</th>
                                <th>BARBEIRO</th>
                                <th><b>DATA EXCLUSÃO</th>
                              </tr>
                            </thead>
                              <?php
                              $nome = nomeBarbeiro();
                               $verifica = mysqli_query($mysqli_connection, 
                               "SELECT * FROM AGENDAMENTOS_EXCLUIDOS WHERE BARBEIRO = (SELECT NOME FROM USUARIO WHERE NOME = '$nome')
                               ORDER BY DATA DESC"); 
                            //Verificar se encontrou resultado na tabela "usuarios"
                            if(($verifica ) AND ($verifica->num_rows != 0))
                                while($row_servico = mysqli_fetch_assoc($verifica)){{?>
                                <?php 
                                    echo '<tr>';
                                    echo '<td>'. $row_servico['NOME'] .'</td>';
                                    echo '<td>'.  implode('/', array_reverse(explode('-',$row_servico['DATA']))) .'</td>';
                                    echo '<td>'. $row_servico['SERVICO'] .'</td>';
                                    echo '<td>'. $row_servico['STATUS'] .'</td>';
                                    echo '<td>'. $row_servico['BARBEIRO'] .'</td>';
                                    echo '<td>'. $row_servico['DATA_EXCLUSAO'] .'</td>';
                                    echo '<tr>';
                                }
                            }?>  
                        </div>
                        </table>
                      </div> 
                  </div>
                </div>
              </div> 
            </div> 
            
            
            
            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>