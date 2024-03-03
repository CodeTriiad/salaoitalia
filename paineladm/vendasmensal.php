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
                            <a class="nav-link active" href="vendas">FATURAMENTO DIARIO</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="vendasmensal">FATURAMENTO MENSAL</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link active" href="vendasanual">FATURAMENTO ANUAL</a>
                          </li>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">FATURAMENTO</h4>
                    <p class="card-description">
                    MENSAL <?php $mes = date('m'); $ano = date('Y'); $mesano = $ano."-".$mes; echo $mes."/".$ano;?>
                      </p>
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>SERVICO</th>
                                <th>DATA</th>
                                <th><b>VALOR</th>
                              </tr>
                            </thead>
                              <?php
                              $nomeBarbeiro = nomeBarbeiro();
                            //consultar no banco de dados
                            $verifica = mysqli_query($mysqli_connection, 
                            "SELECT A.DATA AS DATA, VALOR AS VALOR, S.SERVICOS AS SERVICO FROM SERVICO S
                            INNER JOIN AGENDAMENTO A
                            ON A.SERVICO = S.SERVICOS
                            WHERE A.STATUS = 'CONCLUIDO'
                            AND A.DATA LIKE '$mesano%'
                            ");

                            $calculo = mysqli_query($mysqli_connection, 
                            "SELECT SUM(VALOR) AS VALOR, COUNT(A.SERVICO) AS SOMA FROM SERVICO S
                            INNER JOIN AGENDAMENTO A
                            ON A.SERVICO = S.SERVICOS
                            WHERE A.STATUS = 'CONCLUIDO'
                            AND A.DATA LIKE '$mesano%'") ;
                            $soma = mysqli_fetch_assoc($calculo);
                            //Verificar se encontrou resultado na tabela "usuarios"
                            if(($verifica ) AND ($verifica->num_rows != 0))
                                while($row_servico = mysqli_fetch_assoc($verifica)){{?>
                                <?php 
                                    echo '<tr>';
                                    echo '<td>'. $row_servico['SERVICO'] .'</td>';
                                    echo '<td>'.  implode('/', array_reverse(explode('-',$row_servico['DATA']))) .'</td>';
                                    echo '<td>'. $row_servico['VALOR'] .'</td>';
                                }
                            }?>  
                          </table>
                          <thead>
                              <tr>
                                <th></th>
                                <th><b></th>
                              </tr>
                            </thead>
                            <div class="table-responsive">
                              <table class="table table-striped">
                                <?php
                                echo '<tr>';
                                echo '<td>QUANTIDADE DE CORTE: '. $soma['SOMA'].'</td>';
                                echo '<td>TOTAL: '. $soma['VALOR'].'</td>';?>
                              </table>
                          </div>
                        </div>
                      </div> 
                  </div>
                </div>
              </div> 
            </div> 
            
            
            
            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>