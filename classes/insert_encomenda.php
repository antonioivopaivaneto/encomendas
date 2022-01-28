<?php

session_start();

include "conexao.php";

$para = $_POST['para'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$situacao = $_POST['situacao'];
$condominio = $_POST['cond'];
$encomenda = $_POST['encomenda'];


$sql = "INSERT INTO encomendas (para_enc, data_enc, encomenda_enc,situacao_enc,condominio_enc,hora_enc)
VALUES ('$para','$data', '$encomenda', '$situacao', '$condominio', '$hora')";

if (mysqli_query($conn, $sql)) {

    $_SESSION['user'] = "success";
    $_SESSION['action'] = "insert"; 
    $_SESSION['msg'] = "Usuario Cadastrado com Sucesso";

  header("location:../view_encomendas.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>