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
                            <a class="nav-link " href="despesas">DESPESAS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="despesasfaturamento">DESPESAS x FATURAMENTO</a>
                          </li>
                      </div>
                    <div class="card-body">
                    <h4 class="card-title">DESPESAS</h4>
                    <p class="card-description">
                    <div id="mensagem-erro" style="color: red;"><h3>EM CONSTRUÇÃO</div>
                      </p>
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
    
                        </table>
                      </div> 
                  </div>
                </div>
              </div> 
            </div> 
            
            
            
            
            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>