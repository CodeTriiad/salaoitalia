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
                            <a class="nav-link " href="vendas">FATURAMENTO DIARIO</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="vendasmensal">FATURAMENTO MENSAL</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link active" href="vendasanual">FATURAMENTO ANUAL</a>
                          </li>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">FATURAMENTO</h4>
                    <p class="card-description">
                    DIARIO
                      </p>
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>SERVICO</th>
                                <th>DATA</th>
                                <th>HORAS</th>
                                <th>MINUTO</th>
                                <th>BARBEIRO</th>
                                <th><b>VALOR</th>
                              </tr>
                            </thead>
                              <?php
                              $hoje = date('Y-m-d');
                            //consultar no banco de dados
                            $nomeBarbeiro = nomeBarbeiro();
                            $verifica = mysqli_query($mysqli_connection, 
                            "SELECT A.ID, A.NOME, A.BARBEIRO,
                            HM.DATA, HM.HORA, H.HORAS, M.MINUTOS, HM.ID, S.VALOR, S.SERVICOS AS SERVICO FROM AGENDAMENTO_HORA_MINUTO HM
                            INNER JOIN MINUTOS M
                            ON M.MINUTOS = HM.MINUTOS
                            INNER JOIN HORAS H
                            ON H.HORAS = HM.HORAS
                            INNER JOIN AGENDAMENTO A
                            ON  A.ID = HM.ID
                            INNER JOIN SERVICO S
                            ON S.SERVICOS = A.SERVICO
                            WHERE A.STATUS = 'CONCLUIDO'
                            AND HM.DATA LIKE '$hoje'
                            AND A.BARBEIRO = '$nomeBarbeiro'");

                            $calculo = mysqli_query($mysqli_connection, 
                            "SELECT sum(S.VALOR) AS VALOR FROM AGENDAMENTO_HORA_MINUTO HM
                            INNER JOIN MINUTOS M
                            ON M.MINUTOS = HM.MINUTOS
                            INNER JOIN HORAS H
                            ON H.HORAS = HM.HORAS
                            INNER JOIN AGENDAMENTO A
                            ON  A.ID = HM.ID
                            INNER JOIN SERVICO S
                            ON S.SERVICOS = A.SERVICO
                            WHERE A.STATUS = 'CONCLUIDO'
                            AND HM.DATA LIKE '$hoje'
                            AND A.BARBEIRO = '$nomeBarbeiro'") ;
                            $soma = mysqli_fetch_assoc($calculo);
                            //Verificar se encontrou resultado na tabela "usuarios"
                            if(($verifica ) AND ($verifica->num_rows != 0))
                                while($row_servico = mysqli_fetch_assoc($verifica)){{?>
                                <?php 
                                    echo '<tr>';
                                    echo '<td>'. $row_servico['SERVICO'] .'</td>';
                                    echo '<td>'.  implode('/', array_reverse(explode('-',$row_servico['DATA']))) .'</td>';
                                    echo '<td>'. $row_servico['HORAS'] .'</td>';
                                    echo '<td>'. $row_servico['MINUTOS'] .'</td>';
                                    echo '<td>'. $row_servico['BARBEIRO'] .'</td>';
                                    echo '<td>'. $row_servico['VALOR'] .'</td>';
                                }
                            }?>  
                          </table>
                          <thead>
                              <tr>
                                <th><b>TOTAL</th>
                              </tr>
                            </thead>
                            <table class="table table-striped">
                           <?php
                            echo '<tr>';
                          echo '<td>'. $soma['VALOR'].'</td>';?>
                          </table>
                        </div>
                      </div> 
                  </div>
                </div>
              </div> 
            </div> 
            
            
            
            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>