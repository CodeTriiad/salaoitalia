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
                            <a class="nav-link active" href="vendasmensal">FATURAMENTO MENSAL</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="vendasanual">FATURAMENTO ANUAL</a>
                          </li>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">FATURAMENTO</h4>
                    <p class="card-description">
                    ANUAL
                      </p>
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>MES</th>
                                <th><b>VALOR</th>
                              </tr>
                            </thead>
                              <?php
                            //consultar no banco de dados
                            $nomeBarbeiro = nomeBarbeiro();
                            $vendasAnual = mysqli_query($mysqli_connection, 
                            "SELECT VA.NOME_MES, VA.TOTAL_VENDA, U.NOME
                            FROM VENDAS_ANUAL VA
                                INNER JOIN USUARIO U
                                ON U.ID = VA.ID_BARBEIRO
                                WHERE U.NOME = '$nomeBarbeiro'");
                            //Verificar se encontrou resultado na tabela "usuarios"
                            if(($vendasAnual) AND ($vendasAnual->num_rows != 0))
                                while($row_servico = mysqli_fetch_assoc($vendasAnual)){{?>
                                <?php 
                                    echo '<tr>';
                                    echo '<td>'. $row_servico['NOME_MES'] .'</td>';
                                    echo '<td>'. $row_servico['TOTAL_VENDA'] .'</td>';
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
                            $calculo = mysqli_query($mysqli_connection, 
                            "SELECT SUM(VA.TOTAL_VENDA) AS VALOR, U.NOME
                            FROM VENDAS_ANUAL VA
                                INNER JOIN USUARIO U
                                ON U.ID = VA.ID_BARBEIRO
                                WHERE U.NOME = '$nomeBarbeiro'");
                            $somaVendasAnual = mysqli_fetch_assoc($calculo);
                            echo '<tr>';
                            echo '<td>'. $somaVendasAnual['VALOR'].'</td>';?>
                          </table>
                        </div>
                      </div> 
                  </div>
                </div>
              </div> 
            </div> 
            
            
            
            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>