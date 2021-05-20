<?php

include 'menu.php';

?>

<!DOCTYPE html>

<head>

</head>

<body>
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default shadow">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
            <div class="col">
                <h6 class="text-uppercase text-light ls-1 mb-1">Gráfico</h6>
                <h2 class="text-white mb-0">Vendas</h2>
              </div>
              
            </div>
          </div>
          <div class="card-body">
          
            <!-- Chart -->
            <div class="chart">
              <!-- Inserir -->
              <?php
              include 'graficoVendas.php'
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card shadow">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="text-uppercase text-muted ls-1 mb-1">Gráfico</h6>
                <h2 class="mb-0">Alugueis</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              
              <?php
                include 'graficoAlugueis.php'
              ?>



            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <?php
      include './footer.php';
    ?>
  </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>