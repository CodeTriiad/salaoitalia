
<?php
include_once('config/conexao.php');
include_once('config/function.php');
include_once '../vendor/autoload.php';
                    $nome = $_POST["nome"];
                    $valor = $_POST["valor"];
                    $status = $_POST["status"];
                    $status2 = ltrim($status);

                    if ($status2 == "INATIVO"){
                        $situacao = 0;
                    } else {
                        $situacao = 1;
                    }
                    
                
                //0 inativo, 1 ativo
                if (isset($_POST['adicionar'])){
                    $SQL = "INSERT INTO SERVICO(ID, SERVICOS, VALOR, SITUACAO, DATA_CRIACAO)VALUES(NULL, '$nome','$valor', $situacao, NOW())";
                    mysqli_query($mysqli_connection, $SQL);
                    $fallback = 'configuracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");             
                 } 
                 if(isset($_POST['delete'])){
                    $ID = $_GET['id'];
                    $delete = "DELETE FROM SERVICO WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$delete);
                    $fallback = 'configuracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");  
                    }
                
                if(isset($_POST['desativar'])){
                    $ID = $_GET['id'];
                    $desativar = "UPDATE SERVICO SET SITUACAO = 0 WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$desativar);
                    $fallback = 'configuracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");  
                    }

                if(isset($_POST['ativar'])){
                    $ID = $_GET['id'];
                    $ativar = "UPDATE SERVICO SET SITUACAO = 1 WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$ativar);
                    $fallback = 'configuracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");  
                    }

                if(isset($_POST['ativar_hora'])){
                    $ID = $_GET['id'];
                    $ativar_datahora = "UPDATE HORAS SET SITUACAO = 1 WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$ativar_datahora);
                    $fallback = 'configuracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");  
                    }

                if(isset($_POST['desativar_hora'])){
                    $ID = $_GET['id'];
                    $desativar_datahora = "UPDATE HORAS SET SITUACAO = 0 WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$desativar_datahora);
                    $fallback = 'configuracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");  
                    }
                ?>


