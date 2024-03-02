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
                            <a class="nav-link " href="configuracao">SERVIÇOS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="configuracaocriarservicos">CRIAR SERVIÇOS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="configuracaohorarios">CONFIGURAÇÃO HORARIOS</a>
                          </li>
                        </ul>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">SERVIÇOS</h4>
                    <p class="card-description">
                        Nome do Serviço
                      </p>
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>NOME</th>
                                <th>VALOR</th>
                                <th>STATUS</th>
                                <th>KPI</th>
                                <th>ATIVAR</th>
                                <th>DESATIVAR</th>
                                <th><b>DELETAR</th>
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
                                    echo '<td>'. $row_servico['SERVICOS'] .'</td>';
                                    echo '<td>R$'. $row_servico['VALOR'] .'</td>';

                                  if($row_servico['SITUACAO'] == 1){
                                    echo '<td>ATIVO</td>';
                                  } else {
                                    echo '<td>INATIVO</td>';
                                  }  
                                  
                                  if($row_servico['SITUACAO'] == 1){
                                  echo' <td><img src="images/configuracao/circulo_verde.png" alt="" /> </td>';
                                  } else {
                                  echo '<td><img src="images/configuracao/circulo_vermelho.png" alt="" /> </td>';
                                  }
                                  
                                }?>
                                <td class="text-center">
                                  <form action="insertconfiguracao?id=<?php echo $row_servico['ID'];?>" method="POST">
                                  <button class="btn btn-block btn-primary btn font-weight auth-form-btn" name="ativar" id="ativar" type="submit">ATIVAR</button>
                                  </form>
                                </td>
                                <td class="text-center">
                                  <form action="insertconfiguracao?id=<?php echo $row_servico['ID'];?>" method="POST">
                                  <button class="btn btn-block btn-primary btnfont-weight-medium auth-form-btn" name="desativar" id="desativar" type="submit">DESATIVAR</button>
                                  </form>
                                </td>
                                <td class="text-center">
                                  <form action="insertconfiguracao?id=<?php echo $row_servico['ID'];?>" method="POST">
                                  <button class="btn btn-block btn-danger btn font-weight-medium auth-form-btn" name="delete" id="delete" type="submit"><b>DELETAR</button>
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
            <?php include ('footer.php');?>