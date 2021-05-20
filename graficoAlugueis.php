<?php

include 'conexao/conexao.php';

$sql = "SELECT SUM(valor_negocio) as valor_negocio, data_atual FROM status_imovel where status_imovel = 'Aluguel' group by data_atual";
$buscar = mysqli_query($conexao,$sql);

#chart.js - Preparando valores#

$datas = '';
$valores = '';



while ($dados = mysqli_fetch_array($buscar)) {

  $datadb = $dados['data_atual'];

  $datafinal = explode('-', $datadb);

  $dataarray = $datafinal[2].'/'.$datafinal[1].'/'.$datafinal[0];

	$datas = $datas . '"' . $dataarray . '",';

	$valores = $valores . '"' . $dados['valor_negocio'] . '",';
	

	 $datas = trim($datas); #tira os espaços da variável
	 $valores = trim($valores);



	}

	?>

		<!-- https://www.colourlovers.com/ -->


			<canvas  id="Barra"></canvas>
			
		

		<script type="text/javascript">
			var ctx = document.getElementById('Barra').getContext('2d');
			var myLineChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels:[<?php echo $datas; ?>],
					datasets:
					[{
						label:'Valores',
						data:[<?php echo $valores; ?>],
						backgroundColor: 'rgba(0,255,255)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3,
            categoryPercentage: 1.0,
            barPercentage: 0.5



					}
					]

				},
				options: { 
          maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							fontColor: "white",
							fontSize: 18
						}
					},
					scales: {
						xAxes: [{ 

							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Datas',
								fontColor:'#000000',
								fontSize:12

							},
							gridLines: {
								display:false
							},
							ticks: {
								fontColor: "black",
								fontSize: 12
								
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Valores',
								fontColor: '#000000',
								fontSize:12
							},
							gridLines: {
								display:false
							},
							ticks: {
                min:0,
								fontColor: "black",
								fontSize: 12
							}

						}]
						

					}


				}

			});
			
		</script>
		<!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
