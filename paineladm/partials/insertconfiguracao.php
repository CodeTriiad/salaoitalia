
<?php
include_once('config/conexao.php');
                    $nome = $_POST["nome"];
                    $valor = $_POST["valor"];
                    $status = $_POST["status"];

                    if ($status == "ATIVO"){
                        $situacao = 0;
                    } else {
                        $situacao = 1;
                    }
                    
                
                //0 inativo, 1 ativo
                if (isset($_POST['adicionar'])){
                    $SQL = "INSERT INTO SERVICO(ID, SERVICOS, VALOR, SITUACAO, DATA_CRIACAO)VALUES(NULL, '$nome','$valor', $situacao, NOW())";
                    mysqli_query($mysqli_connection, $SQL);
                    header('location:configuracao.php') ;               
                 } else {
                    header('location:configuracao.php') ;    
                 }

                 if(isset($_POST['delete'])){
                    $ID = $_GET['id'];
                    $delete = "DELETE FROM SERVICO WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$delete);
                        header('location:configuracao.php') ;
                    }else{
                        // echo $row['id'];
                        header('location:configuracao.php') ;
                }
                ?>