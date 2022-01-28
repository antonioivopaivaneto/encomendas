<?php

session_start();

include "conexao.php";



$nome =  $_POST['nome'];
$senha = $_POST['senha'];
$apelido = $_POST['apelido'];
$nivel = $_POST['nivel'];
$email = $_POST['email'];
$morador = $_POST['morador'];
$data = $_POST['data'];
$sexo = $_POST['sexo'];
$tel = $_POST['tel'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$tel_emergencia = $_POST['tel_emergencia'];
$recebe_enc = $_POST['recebe_enc'];

$arquivo  = $_FILES['arquivo']['name'];
      
      //Pasta onde o arquivo vai ser salvo
      $_UP['pasta'] = '../foto/';
      
      //Tamanho máximo do arquivo em Bytes
      $_UP['tamanho'] = 1024*1024*100; //5mb
      
      //Array com a extensões permitidas
      $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
      
      //Renomeiar
      $_UP['renomeia'] = false;
      
      //Array com os tipos de erros de upload do PHP
      $_UP['erros'][0] = 'Não houve erro';
      $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
      $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
      $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
      $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
      
      //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
      if($_FILES['arquivo']['error'] != 0){
        die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
        exit; //Para a execução do script
      }
      
      //Faz a verificação da extensao do arquivo
      $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
      if(array_search($extensao, $_UP['extensoes'])=== false){    
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
          <script type=\"text/javascript\">
            alert(\"A imagem não foi cadastrada extesão inválida.\");
          </script>
        ";
      }
      
      //Faz a verificação do tamanho do arquivo
      else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
        echo "
          <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
          <script type=\"text/javascript\">
            alert(\"Arquivo muito grande.\");
          </script>
        ";
      }
      
      //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
      else{
        //Primeiro verifica se deve trocar o nome do arquivo
        if($UP['renomeia'] == true){
          //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
          $nome_final = time().'.jpg';
        }else{
          //mantem o nome original do arquivo
          $nome_final = $_FILES['arquivo']['name'];
        }
        //Verificar se é possivel mover o arquivo para a pasta escolhida
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
          //Upload efetuado com sucesso, exibe a mensagem
          $sql = "INSERT INTO usuarios (name_user, morador_user, data_nasc_user,sexo_user,tipo_user,celular_user,email_user,senha_user,apelido_user,cpf_user,rg_user,recebe_enco,tel_emergencia,foto_user)
VALUES ('$nome','$morador', '$data', '$sexo', '$nivel', '$tel', '$email', '$senha','$apelido','$cpf','$rg','$recebe_enc','$tel_emergencia','$arquivo')";

if (mysqli_query($conn, $sql)) {

    $_SESSION['user'] = "success";
    $_SESSION['action'] = "insert"; 
    $_SESSION['msg'] = "Usuario Cadastrado com Sucesso";

  header("location:../cadastro_condomino.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
        }else{
          //Upload não efetuado com sucesso, exibe a mensagem
          echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
            <script type=\"text/javascript\">
              alert(\"Imagem não foi cadastrada com Sucesso.\");
            </script>
          ";
        }
      }




?>