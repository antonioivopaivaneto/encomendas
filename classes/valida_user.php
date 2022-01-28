<?php

session_start();

include "conexao.php";

$email = mysqli_real_escape_string($conn,$_POST['email']);
$senha =  mysqli_real_escape_string($conn,$_POST['senha']);


$sql = "SELECT * from usuarios where email_user = '$email' and senha_user = '$senha' ";


$result = mysqli_query($conn,$sql);
$resultado = mysqli_fetch_assoc($result);

var_dump($result);

if(isset($resultado)){
     $_SESSION['login_user'] = $resultado['name_user'];
     $_SESSION['id_user'] = $resultado['id_user'];

    
     $_SESSION['autenticado'] = true ;

     if($resultado['tipo_user'] == 3){
      header("location:../home_user.php");

     }else{
      header("location:../home_admin.php");
     }


     
      
}else{
   // echo "nao pode";
 $_SESSION['status_login'] = "nao permitado";
    $_SESSION['autenticado'] = false ;

    header("location:../index.php");
    
}


?>