<?php

  session_start();

    if(!isset ($_SESSION['usuario']) == true)
    {
      unset($_SESSION['login']);

      header('location:login.php');
    }
  
    $logado = $_SESSION['usuario'];


?>



<!DOCTYPE html>

<head>
  <title>Dashboard - Sistema Imobiliário</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
  
		<!-- CDN do Chart.js -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</head>

<body>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
     
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.php">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  class=" active" ">
            <a class=" nav-link active " href=" ./index.php"> 
              <i class="fas fa-tachometer-alt text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-home text-blue"></i> Imóvel
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./formularioImob.php">
              <i class="fas fa-plus text-blue"></i> Cadastrar Imóvel
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./listar_imob.php">
              <i class="fas fa-list text-blue"></i> Listar Imóveis
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./formularioModalidade.php">
              <i class="fas fa-comment text-blue"></i> Cadastrar Modalidades
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./formularioPagamento.php">
              <i class="fas fa-credit-card text-blue"></i> Cadastrar Pagamentos
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./formularioCategoria.php">
              <i class="fas fa-book text-blue"></i> Cadastrar Categorias
            </a>
          </li>
          <li class="nav-item"">
            <a class="nav-link " href="#">
              <i class="fas fa-address-book text-orange"></i> Clientes
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./formularioCliente.php">
              <i class="fas fa-plus text-orange"></i> Adicionar Cliente
            </a>
          </li>
          <li class="nav-item"">
            <a class="nav-link " href="#">
              <i class="fas fa-users text-green"></i> Usuários
            </a>
          </li>
          <li class="nav-item" style="margin-left: 10px">
            <a class="nav-link " href="./formularioUsuario.php">
              <i class="fas fa-plus text-green"></i> Adicionar Usuário
            </a>
          </li>
          
        </ul>
        <!-- Divider -->
        
      </div>
    </div>
  </nav>






  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                <i class="fas fa-user-tie"></i>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $logado ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Quantidade Imóveis</h5>
                      <?php
                        include 'conexao/conexao.php';
                        $sql = "SELECT COUNT(id_imovel) as quantidade FROM imovel";
                        $busca = mysqli_query($conexao,$sql);
                        $dados = mysqli_fetch_array($busca);
                        $quantidade = $dados['quantidade'];       
                      ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $quantidade ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fas fa-hashtag"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  <span class="text-success mr-2"> </span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Imóveis Vendidos</h5>
                      <?php
                        $sql = "SELECT COUNT(id_status_imovel) as quantidade FROM status_imovel WHERE status_imovel = 'Venda'";
                        $busca = mysqli_query($conexao,$sql);
                        $dados = mysqli_fetch_array($busca);
                        $qtdvendas = $dados['quantidade'];
                      ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $qtdvendas ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-line"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <?php
                      $sql = "SELECT * FROM status_imovel WHERE status_imovel = 'Venda'";
                      $busca = mysqli_query($conexao,$sql);

                      $sql2 = "SELECT * FROM imovel WHERE status_imovel = 'Venda'";
                      $busca2 = mysqli_query($conexao,$sql2);
                      $quantidadeImovel = 0;
                      $quantidadeVenda = 0;
                

                      while (($dados = mysqli_fetch_array($busca)) && ($dados2 = mysqli_fetch_array($busca2))) {
                        $valorImovel = $dados2['valor_imovel'];
                        $valorVenda = $dados['valor_negocio'];

                        $quantidadeImovel = $quantidadeImovel + $valorImovel;
                        $quantidadeVenda = $quantidadeVenda + $valorVenda;

                      
                      $total = $quantidadeVenda - $quantidadeImovel;

                      }

                    
                      if($total <= 0) {

                      

                    ?>
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> R$<?php echo number_format($total, 2,',','.') ?></span>
                    <span class="text-nowrap">Prejuízo de Vendas</span>
                    <?php } else {?>

                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> R$<?php echo number_format($total, 2,',','.') ?></span>
                    <span class="text-nowrap">Lucro de Vendas</span>


                    <?php }
                     ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Imóveis Alugados</h5>
                      <?php
                        $sql = "SELECT COUNT(id_status_imovel) as quantidade FROM status_imovel WHERE status_imovel = 'Aluguel'";
                        $busca = mysqli_query($conexao,$sql);
                        $dados = mysqli_fetch_array($busca);
                        $qtdaluguel = $dados['quantidade'];

                      ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $qtdaluguel ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                      <?php 
                      $sql3 = "SELECT SUM(valor_negocio) as valortotal FROM status_imovel WHERE status_imovel = 'Aluguel'";
                      $busca3 = mysqli_query($conexao,$sql3);
                      $dados3 = mysqli_fetch_array($busca3);
                      $totalaluguel = $dados3['valortotal'];

                      $porcento = $totalaluguel * 0.15;
                      
                      ?>
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> R$<?php echo number_format($porcento, 2,',','.') ?></span>
                    <span class="text-nowrap">Lucro de Aluguéis</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Lucro Bruto</h5>
                      <?php 
                        $lucro = $porcento + $total;
                      
                      ?>
                      <span class="h2 font-weight-bold mb-0">R$<?php echo number_format($lucro, 2,',','.') ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  <?php
                  if($lucro > 0) {
                  ?>
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> Saldo Positivo</span>
                  <?php } else { ?>
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> Saldo Negativo</span>
                  <?php }  ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>