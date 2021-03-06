<?php
include './menu.php';
?>
<!DOCTYPE html>

<head>
  <title></title>
</head>

<body>
  <div class="container-fluid mt--7">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header border-0">
            <h3 class="mb-0">Lista de Imóveis</h3>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Valor</th>
                  <th scope="col">Bairro</th>
                  <th scope="col">CEP</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>
              <tbody class="list">

                <?php
                include './conexao/conexao.php';
                $sql = 'SELECT * FROM imovel';
                $busca = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_array($busca)) {
                  $idimovel = $dados['id_imovel'];
                  $codigo = $dados['codigo_imovel'];
                  $valor = $dados['valor_imovel'];
                  $bairro = $dados['bairro_imovel'];
                  $cep = $dados['cep_imovel'];
                ?>
                  <tr>
                    <td><?php echo $codigo ?></td>
                    <td>R$ <?php echo $valor ?></td>
                    <td><?php echo $bairro ?></td>
                    <td><?php echo $cep ?></td>
                    <td><a href="editar_status.php?id=<?php echo $idimovel ?>" role="button" class="btn btn-primary btn-sm">Editar</a></td>
                  </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</body>

</html>