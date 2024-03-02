           <!-- partial:partials/_footer.html -->
           <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. Todos direitos reservados </span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
    
      <script src="vendors/js/vendor.bundle.base.js"></script>
      <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
      <script src="vendors/chart.js/chart.min.js"></script>
      <script src="vendors/progressbar.js/progressbar.min.js"></script>

      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/template.js"></script>
      <script src="js/settings.js"></script>
      <script src="js/todolist.js"></script>
      <script src="js/jquery.cookie.js" type="text/javascript"></script>
      <script src="js/dashboard.js"></script>
      <script>
       function obterSaudacao() {
            var saudacao = "";
            var agora = new Date();
            var hora = agora.getHours();

            if (hora >= 5 && hora < 12) {
                saudacao = "Bom dia, <?php  nomeBarbeiro();?>";
            } else if (hora >= 12 && hora < 18) {
                saudacao = "Boa tarde, <?php  nomeBarbeiro();?>";
            } else {
                saudacao = "Boa noite, <?php  nomeBarbeiro();?>";
            }

          return saudacao;
        }
        // Atualiza o texto da saudação no elemento HTML
        document.getElementById("saudacao").textContent = obterSaudacao();
    </script>
    </body>
    
    </html>