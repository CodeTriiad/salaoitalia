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
                                              <!-- PERFIL -->
                <div class="col">
                  <div class="card">
                  <div class="card text-center">
                      <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                          <li class="nav-item">
                            <a class="nav-link " href="perfil">PERFIL</a>
                          </li>
                      </div>
                    <div class="card-body">
                      <div class="col py-3 px-lg-5 border bg-light">
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <div class="main-panel" id="perfil-container">
                              <div class="content-wrapper">
                                <main class="form-signin w-25 m-auto mt-5">
                                  <form method='POST' action='config/login/trocarsenha.php'>
                                    <div class="image-upload">
                                      <label for="uploadImage">
                                        <img class="mb-4" src="images/faces/<?php fotoBarbeiro();?>" alt="" width="100" height="100">
                                      </label> 
                                      <input id="uploadImage" type="file" name="foto" onchange="PreviewImage();" hidden>
                                    </div>

                                    <div class="form-floating">
                                      <input type="password" class="form-control" id="" placeholder="" disabled>
                                      <label for=""><?php nomeBarbeiro();?></label>
                                    </div>

                                    <br>
                                    <div class="form-floating">
                                      <input type="password" class="form-control" id="" name='emailBarbeiro' placeholder="" disabled>
                                      <label for="" name='emailBarbeiro'><?php emailBarbeiro();?></label>
                                    </div>

                                    <h4 id="userEmail" class="mb-5"></h4>
                                    <h2 class="h3 mb-3 fw-normal">Alterar senha</h2>

                                    <div class="form-floating">
                                      <input type="password" class="form-control" name='senha' id="floatingPassword" placeholder="Password" required>
                                      <label for="floatingPassword" name='senha'>Digite sua senha</label>
                                    </div>

                                    <br>
                                    <div class="form-floating">
                                      <input type="password" class="form-control" name='senhaRepetida' id="floatingPassword" placeholder="Password" required>
                                      <label for="floatingPassword" name='senhaRepetida'>Repita a senha</label></br>
                                    </div>
                                    <div id="mensagem-erro" style="color: red;"><h5>Senha não alterada</div>
                                    <button class="btn btn-primary w-50 py-2 mt-3" type="submit" name='alterarSenha'>Salvar Alteração</button>
                                  </form>
                                  </div>
                         </table>
                      </div> 
                  </div>
                </div>
              </div> 
            </div> 
            
            
<script>
    // PREVIEW FOTO
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

            <!-- content-wrapper ends -->
            <?php include ('footer.php');?>