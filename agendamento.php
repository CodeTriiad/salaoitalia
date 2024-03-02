<?php
include_once('paineladm/config/conexao.php');


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Agendamento</title>
  <link rel="stylesheet" href="paineladm/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href=paineladm/images/favicon.png/>
  <link rel="stylesheet" href="paineladm/css/classe.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper" id="bg-container">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="paineladm/images/logo-dark.svg" alt="logo">
              </div>
              <h4>Seja bem vindo</h4>
              <h6 class="fw-light">Agende o seu horário </h6>
              <form method="POST" action="insertagendamento" class="pt-3">
                <div class="form-group">
                  <input type="name" name="name" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Nome" required style="color: black;">
                </div>
                <div class="form-group">
                  <input type="number" name="telefone" class="form-control form-control-lg" placeholder="Telefone" id="field" mixlength="10" maxlength="13" pattern="([0-9])" required style="color: black;">
                </div>
                <div class="form-group" class="form-control form-control-lg">
                  <?php 
                      $SQL = "SELECT NOME FROM USUARIO WHERE ID >= 2 ORDER BY NOME";
                      $QUERY  = mysqli_query($mysqli_connection, $SQL);
                  ?>
                      <select name="barbeiro" class="input-box" placeholder="Barbeiro" required style="color: black;">
                  <?php
                    while($barbeiro = mysqli_fetch_array($QUERY)){              
                  ?>
                    <option value="
                        <?=  $barbeiro['NOME'] ?>"style="color: black;">
                        <?php echo $barbeiro['NOME']; ?>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group" class="form-control form-control-lg">
                  <?php 
                      $SQL = "SELECT VALOR, SERVICOS FROM SERVICO WHERE SITUACAO = 1 ORDER BY SERVICOS ";
                      $QUERY  = mysqli_query($mysqli_connection, $SQL);
                  ?>

                  <select name="servicos" class="input-box" required style="color: black;">
                    <?php while($servicos = mysqli_fetch_array($QUERY)){ ?>
                    <option value="<?=  $servicos['SERVICOS'] ?>" style="color: black;"><?php echo $servicos['SERVICOS'] . "<b>ㅤㅤ|ㅤㅤVALOR R$" . $servicos['VALOR'];?>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group" >
                  <div id="data-container">
                   <h5>Selecione o dia</h5>
                   <?php
                      date_default_timezone_set('America/Sao_Paulo');
                      $yesterday = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d"),date("Y")));
                      $max = date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")+30,date("Y")));
                      ?>
                    <input
                    type="date" name="dia" id="" min="<?php echo $yesterday; ?>" max="<?php echo $max; ?>" required/>
                  </div>
                </div>
                <div class="form-group">
                  <div id="data-container">
                    <h5>Selecione o horário</h5>
                    <?php 
                      $SQL = "SELECT HORAS FROM HORAS WHERE SITUACAO = 1 ORDER BY HORAS ";
                      $QUERY  = mysqli_query($mysqli_connection, $SQL);
                  ?>
                    <select name="horas" class="input-box" required style="color: black;">
                    <?php while($servicos = mysqli_fetch_array($QUERY)){ ?>
                    <option value="<?=  $servicos['HORAS'] ?> "style="color: black;"><?php echo $servicos['HORAS'];?>
                    <?php } ?>
                  </select>
                  <select name="minutos" class="input-box" required style="color: black;">
                  <?php 
                      $SQL = "SELECT MINUTOS FROM MINUTOS WHERE SITUACAO = 1 ORDER BY MINUTOS ";
                      $QUERY  = mysqli_query($mysqli_connection, $SQL);
                  ?>
                    <?php while($servicos = mysqli_fetch_array($QUERY)){ ?>
                    <option value="<?=  $servicos['MINUTOS'] ?>"style="color: black;"><?php echo $servicos['MINUTOS'];?>
                    <?php }?>
                  </select>
                  </div>
                </div>
                <div class="mt-3">
                  <a href="insertagendamento"> <button name="agendar" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="btn-agendar">Agendar</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                </div>
              </form>
              
              <!-- Adicione este elemento onde você quer exibir as mensagens de erro -->
              <div id="mensagem-erro" style="color: red;"></div>


            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</body>
<script>
  $(document).ready(function() {
  $("#field").keyup(function() {
      $("#field").val(this.value.match(/[0-9]*/));
  });
});

</script>

</html>

            