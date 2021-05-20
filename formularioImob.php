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
						<h3 class="mb-0">Cadastro de Imovel</h3>
					</div>

					<div class="container" style="margin-top: 10px">
						<form action="./cadastros/inserir_imovel.php" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<?php 
									$codigo = rand(1,99999);
									?>
									<div class="form-group">
										<label>Codigo Imóvel</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Nome " name="imovel" value="<?php echo $codigo ?>"required="" style="width: 110px" readonly>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<label>Valor do Imóvel</label>
										<input type="numeric" class="form-control form-control-alternative"  placeholder="Valor do imóvel" style="width: 300px" name="valorimovel" required=""  autocomplete="off">
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label>CPF do Proprietário</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Digite um CPF válido" name="cpf" required="" autocomplete="off">
									</div>
								</div>

								




								<div class="col-md-6">
									<div class="form-group">
										<label>Endereço</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Endereço " name="endereco" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Número</label>
										<input type="number" class="form-control form-control-alternative"  placeholder="Número" name="numero" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Bairro</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Bairro" name="bairro" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Complemento</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Complemento " name="complemento"  autocomplete="off">
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label>Cidade</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Cidade " name="cidade" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Estado</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="estado">
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP">São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
											<option value="EX">Estrangeiro</option>
											
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>CEP</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="CEP" name="cep" required=""  autocomplete="off">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Aluguel ou Venda</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="escolhamodalidade">
											<option>Selecione uma Opção</option>
											<?php
											include 'conexao/conexao.php';
											$sql = 'SELECT * FROM modalidade';
											$buscar = mysqli_query($conexao,$sql);

											while ($dados = mysqli_fetch_array($buscar)) {
												$idmodalidade = $dados['id_modalidade'];
												$modalidade = $dados['tipo_modalidade'];

												?>
												<option value="<?php echo $idmodalidade ?>"><?php echo $modalidade ?></option>

											<?php } ?>
											
										</select>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Modalidade de Pagamento</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="pagamento">
											<option>Selecione uma Opção</option>
											<?php
											include 'conexao/conexao.php';
											$sql = 'SELECT * FROM pagamento';
											$buscar = mysqli_query($conexao,$sql);

											while ($dados = mysqli_fetch_array($buscar)) {
												$idpagamento = $dados['id_pagamento'];
												$pagamento = $dados['tipo_pagamento'];

												?>
												<option value="<?php echo $idpagamento ?>"><?php echo $pagamento ?></option>

											<?php } ?>
											
										</select>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Categoria do Imóvel</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="categoria">
											<option>Selecione uma Opção</option>
											<?php
											include 'conexao/conexao.php';
											$sql = 'SELECT * FROM categoria';
											$buscar = mysqli_query($conexao,$sql);

											while ($dados = mysqli_fetch_array($buscar)) {
												$idcategoria = $dados['id_categoria'];
												$categoria = $dados['nome_categoria'];

												?>
												<option value="<?php echo $idcategoria ?>"><?php echo $categoria ?></option>

											<?php } ?>
											
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Fotos</label>
										<table class="table" id="products-table">
											<thead>
												<tr>
													

													<!--   <th>Ações</th> -->
												</tr>
											</thead>
											<tbody>
												<tr>
													<?php $i=0;?>

													<td>
														<input type="file" name="foto[<?php echo $i?>]" class="form-control-file" id="exampleFormControlFile1">

													</td>



												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="5" style="text-align: right;">
														<button onclick="AddTableRow()" type="button" class="btn btn-danger">Adicionar Foto</button>
													</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>






							<div class="card-footer py-4">
								<div style="text-align: right">
									<button type="submit"  class="btn btn-primary">Cadastrar</button>
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
<script language="javascript">
              var maximo = 6;
              (function($) {
                AddTableRow = function() {
                  var qtd = $("#products-table tbody tr").length;
                  if (qtd < maximo) {
                    var newRow = $("<tr>");
                    var cols = "";
 
                    cols += '<td>  <input type="file" name="foto['+ qtd +']" class="form-control-file" id="exampleFormControlFile1"></td></tr>';
                    
                    
                    newRow.append(cols);
                    $("#products-table").append(newRow);
                    resetId();
                    return false;
                  }
                };
              })(jQuery);
              //renova os ids dos campos dinâmicos
 
  
    </script>