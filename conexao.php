<?php

  $hostname= "localhost";
  //nome do banco de dados
  $bancodedados= "senha";
  $usuario= "root";
  $senha= "";
  
  
  $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
  
  if ($mysqli-> connect_errno){
    echo "Falha ao conectar:" . $mysqli->connect_errno;
    exit();
  }
?>