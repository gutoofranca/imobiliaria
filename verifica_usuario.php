<?php
  session_start();
  include 'conexao/conexao.php';
  include 'script/password.php';

  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";
  $busca = mysqli_query($conexao,$sql);

  $dados = mysqli_fetch_array($busca);
  $senhabd = $dados['senha_usuario'];

  $senhaVerificada = md5($senha);




  $linha = mysqli_affected_rows($conexao);


  if ($linha == 1) {
    if($senhabd == $senhaVerificada) {
      $_SESSION['usuario'] = $usuario;
      header("Location: index.php");
    } else {
      header('Location: login.php?id=1');
    }
  } else {
    header('Location: login.php?id=1');
  }