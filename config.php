<?php 

  //$dbHost = 'LocalHost';
  //$dvUsername = 'root';
  //$dbPassword = '';
  //$dbName = 'formulario-felipe';

  define('HOST','LocalHost');
  define('USUARIO','root');
  define('SENHA','');
  define('DB','formulario-felipe');

  $conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('não foi possivel conectar ao banco');

  //or die ("Erro")

?>