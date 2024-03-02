
<?php
// Importar as classes  
include_once('config/conexao.php');
include_once('config/function.php');
include_once '../vendor/autoload.php';

                 if(isset($_POST['concluir'])){
                    $ID = $_GET['id'];
                    $concluir = "UPDATE AGENDAMENTO SET STATUS = 'CONCLUIDO' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$concluir);
                        $fallback = 'administracao';
                        $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                        header("location: {$anterior}");
                    }

                if(isset($_POST['agendar'])){
                    $ID = $_GET['id'];
                    $agendar = "UPDATE AGENDAMENTO SET STATUS = 'AGENDADO' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$agendar);
                    $fallback = 'administracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                    }

                if(isset($_POST['deletar'])){
                    $ID = $_GET['id']; 
                    $deletar_agendamento = "DELETE FROM AGENDAMENTO WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$deletar_agendamento);
                    $fallback = 'administracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                    }

                if(isset($_POST['enviado'])){
                    $ID = $_GET['id']; 
                    $enviado = "UPDATE AGENDAMENTO SET ENVIADO = 'S' WHERE ID = $ID";
                    mysqli_query($mysqli_connection,$enviado);
                    $fallback = 'administracao';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                    }
                
                if(isset($_POST['faturamentoAnual'])){
                    $idBarbeiro = idBarbeiro();
                    $data = date('Y-m');
                    $ano = date('Y');
                    $mes = date('m');
                    $faturamentoAnual = "CALL VENDAS_ANUAL('$mes', $idBarbeiro, '$data-1', '$data-30', $ano)";
                    mysqli_query($mysqli_connection,$faturamentoAnual);
                    $fallback = 'vendasanual';
                    $anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;
                    header("location: {$anterior}");
                }
                ?>