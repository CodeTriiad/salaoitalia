
<?php
// Importar as classes  
include_once('config/conexao.php');
include_once('config/function.php');
include_once '../vendor/autoload.php';

                 if(isset($_POST['concluir'])){
                    $ID = $_GET['id'];
                    $concluir = "UPDATE AGENDAMENTO SET STATUS = 'CONCLUIDO' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$concluir);
                        header('location:administracao') ;
                    }

                if(isset($_POST['agendar'])){
                    $ID = $_GET['id'];
                    $agendar = "UPDATE AGENDAMENTO SET STATUS = 'AGENDADO' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$agendar);
                    header('location:administracao') ;
                    }

                if(isset($_POST['deletar'])){
                    $ID = $_GET['id']; 
                    $deletar_agendamento = "DELETE FROM AGENDAMENTO WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$deletar_agendamento);
                        header('location:administracao') ;
                    }

                if(isset($_POST['enviado'])){
                    $ID = $_GET['id']; 
                    $enviado = "UPDATE AGENDAMENTO SET ENVIADO = 'S' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$enviado);
                        header('location:administracao') ;
                    }
                
                if(isset($_POST['faturamentoAnual'])){
                    $idBarbeiro = idBarbeiro();
                    $data = date('Y-m');
                    $ano = date('Y');
                    $mes = date('m');
                    $faturamentoAnual = "CALL VENDAS_ANUAL('$mes', $idBarbeiro, '$data-1', '$data-30', $ano)";
                    mysqli_query($mysqli_connection,$faturamentoAnual);
                    header('location:vendasanual');
                }
                ?>