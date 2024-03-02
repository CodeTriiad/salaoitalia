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
                              <th>DELETAR</th>
                              <th>WHATSAPP</th>
                              <th>BARBEIRO</th>
                            </tr>
                          </thead> 
                         <form method="GET">
                         <h4 class="card-title">FILTRAR DIA: <input type="date" name="data">
                          <button  class="btn btn btn-info btn-sm font-weight-medium auth-form-btn">FILTRAR </h4>
                       </form>
                         <?php
                          if($email === "adm@codetriad.net"){
                          $verifica = mysqli_query($mysqli_connection, 
                          "SELECT ID, NOME,TELEFONE, SERVICO, DATA, HORA, 
                          STATUS,BARBEIRO, ENVIADO FROM AGENDAMENTO
                          ORDER BY DATA DESC"); 
                         } else {
                          $verifica = mysqli_query($mysqli_connection, 
                          "SELECT ID, NOME,TELEFONE, SERVICO, DATA, HORA, 
                          STATUS,BARBEIRO, ENVIADO FROM AGENDAMENTO WHERE BARBEIRO = (SELECT NOME FROM USUARIO WHERE EMAIL = '$email')
                          ORDER BY DATA DESC"); 
                         }
                          $row_agendamento = mysqli_fetch_assoc($verifica);
                          if(isset($_GET['data'])){
                            $data = $_GET['data'];
                            $verifica = mysqli_query($mysqli_connection, 
                            "SELECT ID, NOME,TELEFONE, SERVICO, DATA, HORA, 
                            STATUS,BARBEIRO, ENVIADO FROM AGENDAMENTO WHERE BARBEIRO = (SELECT NOME FROM USUARIO WHERE EMAIL = '$email')
                            AND DATA LIKE '%$data%' ORDER BY DATA DESC"); 
                            if(($verifica ) AND ($verifica->num_rows != 0)){
                              while($row_agendamento = mysqli_fetch_assoc($verifica)){
                                // while($row_agendamento = mysqli_fetch_assoc($verifica)){
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
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-primary btn font-weight-medium auth-form-btn" name="agendar" id="delete" type="submit">AGENDAR</button>
                                          </form>
                                        </td>
                                        <td class="text-center">
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-primary btn font-weight-medium auth-form-btn" name="concluir" id="concluir" type="submit">CONCLUIR</button>
                                          </form>
                                        </td>
                                        <td class="text-center">
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-danger btn font-weight-medium auth-form-btn" name="deletar" id="deletar" type="submit">DELETAR</button>
                                          </form>
                                        </td>
                                        <?php
                                        if($row_agendamento['ENVIADO'] == 'S'){
                                          $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                                          $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
                                          $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                                          $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
                                          $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
                                          $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
                                          $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
                                          $numero = $row_agendamento['TELEFONE'];
                                          $nome = $row_agendamento['NOME'];
                                          $barbeiro = $row_agendamento['BARBEIRO'];
                                          $hora = $row_agendamento['HORA'];
                                          $dia = $row_agendamento['DATA'];
                                          $texto = "Sr(a). *".$nome."*,%0DSeu horário está agendado%0D
                                          Pelo Barbeiro: *".$barbeiro."*%0D
                                          Dia: *".$dia."*%0DHorario: *".$hora."*%0D
                                          Se por acaso chegar atrasado, enviar mensagem para o seu barbeiro.";
                                          if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
                                            $link = "whatsapp://send?phone=55$numero&text=$texto";
                                            } else {
                                              $link = "https://api.whatsapp.com/send?phone=55$numero&text=$texto";
                                            }
                                           ?><td>
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button onClick="window.open('<?php echo $link;?>','mywindow','width=400,height=200,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes')" 
                                          class="btn btn-block btn btn-success btn font-weight-medium auth-form-btn" name="enviado" id="enviado" type="submit">ENVIADO</button>
                                          </form></td><?php
                                        } else{
                                       ?><td>
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                      <button onClick="window.open('<?php echo $link;?>','mywindow','width=400,height=200,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes')" 
                                          class="btn btn-block btn btn-outline-success btn font-weight-medium auth-form-btn" name="enviado" id="enviado" type="submit">ENVIAR</button>
                                      </form></td><?php
                                }
                                echo '<td>'. $row_agendamento['BARBEIRO'] .'</td>';
                                echo '</tr>';
                                  }
                              }
                          
                          } else {
                          //Verificar se encontrou resultado na tabela "agendamento"
                          if(($verifica ) AND ($verifica->num_rows != 0)){
                              while($row_agendamento = mysqli_fetch_assoc($verifica)){
                                // while($row_agendamento = mysqli_fetch_assoc($verifica)){
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
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-primary btn font-weight-medium auth-form-btn" name="agendar" id="delete" type="submit">AGENDAR</button>
                                          </form>
                                        </td>
                                        <td class="text-center">
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-primary btn font-weight-medium auth-form-btn" name="concluir" id="concluir" type="submit">CONCLUIR</button>
                                          </form>
                                        </td>
                                        <td class="text-center">
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button class="btn btn-block btn-danger btn font-weight-medium auth-form-btn" name="deletar" id="deletar" type="submit">DELETAR</button>
                                          </form>
                                        </td>
                                        <?php
                                        if($row_agendamento['ENVIADO'] == 'S'){
                                          $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                                          $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
                                          $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                                          $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
                                          $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
                                          $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
                                          $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
                                          $numero = $row_agendamento['TELEFONE'];
                                          $nome = $row_agendamento['NOME'];
                                          $barbeiro = $row_agendamento['BARBEIRO'];
                                          $hora = $row_agendamento['HORA'];
                                          $dia = $row_agendamento['DATA'];
                                          $texto = "Sr(a). *".$nome."*,%0DSeu horário está agendado%0DPelo Barbeiro: *".$barbeiro."*%0DDia: *".$dia."*%0DHorario: *".$hora."*%0DSe por acaso chegar atrasado, enviar mensagem para o seu barbeiro.";
                                          if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
                                            $link = "whatsapp://send?phone=55$numero&text=$texto";
                                            } else {
                                              $link = "https://api.whatsapp.com/send?phone=55$numero&text=$texto";
                                            }
                                           ?><td>
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                          <button onClick="window.open('<?php echo $link;?>')" class="btn btn-block btn btn-success btn font-weight-medium auth-form-btn" name="enviado" id="enviado" type="submit">ENVIADO</button>
                                          </form></td><?php
                                        } else{
                                       ?><td>
                                          <form action="insertadministracao?id=<?php echo $row_agendamento['ID'];?>" method="POST">
                                      <button onClick="window.open('<?php echo $link;?>')" 
                                          class="btn btn-block btn btn-outline-success btn font-weight-medium auth-form-btn" name="enviado" id="enviado" type="submit">ENVIAR</button>
                                      </form></td><?php
                                }
                                echo '<td>'. $row_agendamento['BARBEIRO'] .'</td>';
                                echo '</tr>';
                                  }
                              }
                          }
                    ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>