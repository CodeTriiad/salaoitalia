
<?php
include_once('config/conexao.php');
                    $nome = $_POST["nome"];
                    $valor = $_POST["valor"];
                    $status = $_POST["status"];

                    if ($staus == "INATIVO"){
                        $situcao = 0;
                    } else {
                        $situacao = 1;
                    }
                    
                
                //0 inativo, 1 ativo
                if (isset($_POST['adicionar'])){
                    $SQL = "INSERT INTO SERVICO (ID, SERVICOS, VALOR, SITUACAO, DATA_CRIACAO)VALUES(NULL, '$nome','$valor', '$situacao', NOW())";
                    mysqli_query($mysqli_connection, $SQL);
                    header('location:configuracao.php') ;               
                 } else {
                    header('location:configuracao.php') ;    
                 }

                 if(isset($_POST['concluir'])){
                    $ID = $_GET['id'];
                    $concluir = "UPDATE AGENDAMENTO SET STATUS = 'CONCLUIDO' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$concluir);
                        header('location:administracao.php') ;
                    }else{
                        // echo $row['id'];
                        header('location:administracao.php') ;
                }

                if(isset($_POST['agendar'])){
                    $ID = $_GET['id'];
                    $agendar = "UPDATE AGENDAMENTO SET STATUS = 'AGENDADO' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$agendar);
                        header('location:administracao.php') ;
                    }else{
                        // echo $row['id'];
                        header('location:administracao.php') ;
                }
                ?>