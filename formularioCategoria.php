<?php
include 'menu.php';

?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>


  <div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header border-1">
            <h3 class="mb-0">Cadastro de Categoria</h3>
          </div>

          <div class="container" style="margin-top: 10px">
            <form action="cadastros/inserir_categoria.php" method="get">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tipo de Categoria</label>
                    <input type="text" class="form-control form-control-alternative" placeholder="Informe uma Categoria" id="categoria" name="categoria" required="" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="card-footer py-4">
                <div style="text-align: right">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <!-- Footer -->
    <?php
      include './footer.php';
    ?>
  </div>


  <?php
  include 'rodape.php';
  ?>

</body>

</html>