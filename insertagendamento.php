<?php
include_once('paineladm/config/conexao.php');
include_once('paineladm/config/function.php');


$name = $_POST["name"];
$telefone = $_POST["telefone"];
$barbeiro = $_POST["barbeiro"];
$servicos = $_POST["servicos"];
$dia = $_POST["dia"];
$horas = $_POST["horas"];
$minutos = $_POST["minutos"];

$convert = (int)$horas;
$convert2 = (int)$minutos;
$horario = "$convert:$convert2";

$barber = ltrim($barbeiro);

if (isset($_POST['agendar'])) {
    $barber = ltrim($barbeiro);
    // Verificar se o horário está ocupado
    $verificarDisponibilidade = "SELECT * FROM AGENDAMENTO
    WHERE DATA = '$dia'
	AND HORA LIKE '%$horario%'
	AND BARBEIRO = '$barber' ";
    $resultado = mysqli_query($mysqli_connection, $verificarDisponibilidade);
    if (mysqli_num_rows($resultado) > 0) {
        
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
                <form method="" action="agendamento.php" class="pt-3">
                    <table class="table table-striped">
                        <thead>
                        <div id="mensagem-erro" style="color: red;"><h3> HORARIOS INDISPONIVEIS</div>
                        <?php  
                        ?>
                        <tr>
                            <th>DATA</th>
                            <th>HORA</th>
                            <th>BARBEIRO</th>
                        </tr>
                        </thead>
                        <?php
                        $verifica = mysqli_query($mysqli_connection, "SELECT SERVICO,DATA,HORA,BARBEIRO 
                        FROM AGENDAMENTO 
                        WHERE DATA = '$dia' 
                        AND STATUS IN ('AGENDADO', 'PENDENTE') ORDER BY HORA") ;
                        if(($verifica ) AND ($verifica->num_rows != 0))
                            while($row_servico = mysqli_fetch_assoc($verifica)){{
                                echo '<tr>';
                                echo '<td>'. implode('/', array_reverse(explode('-',$row_servico['DATA']))) .'</td>';
                                echo '<td>'. $row_servico['HORA'] .'</td>';
                                echo '<td>'. $row_servico['BARBEIRO'] .'</td>';
                                echo '<tr>';
                            
                            }
                        } 
                        ?>
                    </table>
                    <a href="agendamento"> <button name="" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="btn-agendar">VOLTAR</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    } elseif(mysqli_num_rows($resultado) < 1) {
        // Horário está disponível, prosseguir com o agendamento
        $barber = ltrim($barbeiro);
        $SQL = "INSERT INTO AGENDAMENTO (ID, NOME, TELEFONE, SERVICO, DATA, HORA, STATUS, BARBEIRO, HORA_SOLICITACAO) VALUES (
            NULL, '$name','$telefone', '$servicos', '$dia', '$horario', 'PENDENTE', '$barber', NOW()
        )";
        mysqli_query($mysqli_connection, $SQL);

        $FK = "INSERT INTO AGENDAMENTO_HORA_MINUTO
        (ID, DATA, HORA, HORAS, MINUTOS, ID_AGENDAMENTO)VALUES(NULL, '$dia', '$horario', '$horas', '$minutos',
        (SELECT ID FROM AGENDAMENTO WHERE ID  ORDER BY ID DESC LIMIT 1)
        )";
        mysqli_query($mysqli_connection, $FK);
        //envioEmail(emailBarbeiro(), 'Barbeiro');
        // Redirecionar ou exibir uma mensagem de sucesso, se necessário
        header('Location:https://barbearia.codetriad.net/agendamentofeito');
}
}
?>
