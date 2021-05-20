<?php
include 'menu.php';


$id = $_GET['id'];

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
            <h3 class="mb-0">Status do Imóvel</h3>
          </div>

          <div class="container" style="margin-top: 10px">
            <form action="cadastros/inserir_status.php" method="post">
              <div class="row">
                <div class="col-md-2">
                  <?php
                    include "conexao/conexao.php";
                    $sql = "SELECT * FROM imovel where id_imovel = $id";
                    $busca = mysqli_query($conexao,$sql);
                    while ($dados = mysqli_fetch_array($busca)) {
                      $idimovel = $dados['id_imovel'];
                      $codigo = $dados['codigo_imovel'];
                    }

                  ?>
                  <div class="form-group">
                    <label>Código do Imóvel</label>
                    <input type="text" class="form-control form-control-alternative" value="<?php echo $codigo ?>" name="codigo" readonly>
                  </div>
                </div>
                <div class="col-md-3">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Corretor</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="corretor">
											<option>Selecione uma Opção</option>
											<?php
											include 'conexao/conexao.php';
											$sql = 'SELECT * FROM usuario where nivel_acesso_usuario = 2';
											$buscar = mysqli_query($conexao,$sql);

											while ($dados = mysqli_fetch_array($buscar)) {
												$idusuario = $dados['id_usuario'];
                        $nome = $dados['nome_usuario'];
												$usuario = $dados['usuario'];

												?>
												<option value="<?php echo $usuario ?>"><?php echo $nome ?> - <?php echo $usuario ?></option>

											<?php } ?>
											
										</select>
									</div>
								</div>
                <div class="col-md-3">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Modalidade</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="modalidade">
											<option>Selecione uma Opção</option>
											<?php
											include 'conexao/conexao.php';
											$sql = 'SELECT * FROM modalidade';
											$buscar = mysqli_query($conexao,$sql);

											while ($dados = mysqli_fetch_array($buscar)) {
												$idmodalidade = $dados['id_modalidade'];
												$modalidade = $dados['tipo_modalidade'];

												?>
												<option><?php echo $modalidade ?></option>

											<?php } ?>
											
										</select>
									</div>
								</div>
                <div class="col-md-4">
                        <div class="form-group">
                          <label>Valor</label>
                          <input type="numeric" name="valor" class="form-control form-control-alternative" autocomplete="off" required>
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