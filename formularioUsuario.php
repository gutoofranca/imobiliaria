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
            <h3 class="mb-0">Cadastro de Usuário</h3>
          </div>

          <div class="container" style="margin-top: 10px">
            <form action="./cadastros/inserir_usuario.php" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control form-control-alternative" placeholder="Nome Completo" name="nome" required="" autofocus autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nível do Usuário</label>
                    <select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="nivel">
                      <option value="1">Gerente</option>
                      <option value="2">Corretor</option>
                      <option value="3">Recepcionista</option>
                      <option value="4">Administrador</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" class="form-control form-control-alternative" placeholder="Nome de Usuário" name="usuario" required="" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control form-control-alternative" placeholder="Senha - Mínimo 8 Digitos" name="senha" required="" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control form-control-alternative" placeholder="Digite um email válido" name="email" required="" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="card-footer py-4">
                <div style="text-align: right">
                  <button type="submit" role="button" class="btn btn-primary">Cadastrar</button>
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