<?php include("header.php");


include "classes/conexao.php";
$sql ="SELECT u.name_user,u.id_user,e.para_enc,e.data_enc,e.encomenda_enc,e.situacao_enc,c.id_cond,c.nome_cond,e.hora_enc from usuarios as u INNER JOIN encomendas e ON e.para_enc = u.id_user INNER JOIN condominio c ON e.condominio_enc = c.id_cond;";
$result = mysqli_query($conn,$sql);
?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Encomendas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Visualize ou registre novas encomendas</li>
                        </ol>
                       
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                           <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" >
                                            <thead>
                                                <tr>
                                                    <th scope="col">Localizador</th>
                                                    <th scope="col">Data e Recebimento</th>
                                                    <th scope="col">Encomenda</th>
                                                    <th scope="col">Situação</th>
                                                    <th scope="col">Código de Retirada</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($dados = mysqli_fetch_assoc($result)){?>
                                                <tr>
                                                    <td><?php  echo $dados['name_user'] ;?></td>
                                                    <td><?php  echo $dados['data_enc'] ;?>
                                                        <br><?php  echo $dados['hora_enc'] ;?>
                                                    </td>
                                                    <td><?php  echo $dados['encomenda_enc'] ;?></td>
                                                    <td><?php  echo   uniqid('user_'); ?></td>

                                                    <td>
                                                        
                                                    <?php 
                                                      switch ($dados['situacao_enc'] ) {
                                                        case 1:
                                                            echo "<span  style='color:red'>Pendente</span> <i class='fas fa-circle' style='color:red'></i>";

                                                            break;
                                                        case 2:
                                                           echo "<span  style='color:blue'>Avisado</span> <i class='fas fa-circle' style='color:blue'></i>";
                                                            break;
                                                        case 3:
                                                            echo "<span  style='color:green'>Entregue</span> <i class='fas fa-circle' style='color:green'></i>";
                                                            break;
                                                       
                                                    
                                                        }
                                                    ?>
                                                
                                                </td>
                                     
                                                </tr> 
                                                
                                                <?php } ?>
                                            </tbody>
                                        </table>  
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pessoas Autorizadas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <span>Foto:</span>
         <br>
       <span>Nome:</span>
       <br>
       <span>CPF:</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>             
                        

                
                </main>
              <?php include("footer.php");?>