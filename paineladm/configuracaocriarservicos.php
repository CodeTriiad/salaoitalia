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
                            <a class="nav-link active" href="configuracao.php">SERVIÇOS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="configuracaocriarservicos.php">CRIAR SERVIÇOS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="configuracaohorarios.php">CONFIGURAÇÃO HORARIOS</a>
                          </li>
                        </ul>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">CRIAÇÃO DE SERVIÇO</h4>
                    <div class="col py-3 px-lg-5 border bg-light">
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
                                <input type="nome" name="nome" class="form-control form-control-lg" id="" placeholder="Nome" required>
                              </div>
                                <div class="form-group">
                                <h1 class="card-title">VALOR
                                  <input type="nome" name="valor" class="form-control form-control-lg" id="" placeholder="Valor ex: 20.00" required>
                                </div>
                                <div class="form-group">
                                  <h1 class="card-title">STATUS
                                        <?php 
                                        $SQL = "SELECT ID, SITUACAO FROM STATUS WHERE ID = 4 OR ID = 5";
                                        $QUERY  = mysqli_query($mysqli_connection, $SQL);
                                        ?>

                                    <select type="status" name="status" class="form-control form-control-lg"><?php
                                        while($situacao = mysqli_fetch_array($QUERY)){?>
                                      <option value="
                                          <?=  $situacao['SITUACAO'] ?>">
                                        <?php echo $situacao['SITUACAO']; ?>
                                      <?php } ?>
                                    </select>
                                </div>
                              <div class="form-group">
                                <a><button class="btn btn-block btn-primary btn font-weight-medium auth-form-btn" type="submit" name="adicionar">Adicionar</button>
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
            </div> 
            
            
            
            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>