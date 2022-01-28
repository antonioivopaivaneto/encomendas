<?php include("header.php");



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
                                        <a class="btn btn-info text-white" href="add_encomenda.php">Adicionar Nova</a>
                                           <div class="table-responsive">
                                        <table class="table table-striped" id="dataTable" >
                                            <thead>
                                                <tr>
                                                    <th scope="col">Localizador</th>
                                                    <th scope="col">Data e Recebimento</th>
                                                    <th scope="col">Encomenda</th>
                                                    <th scope="col">Código de Retirada</th>
                                                    <th scope="col">Situação</th>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">Quem Retirou</th>
                                                    <th scope="col">Data Retirada</th>
                                                    <th scope="col">Autorizados</th>
                                                    <th scope="col">Ação</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                           
                                                <tr>
                                                    <td>Hadan</td>
                                                    <td>28/01/2022
                                                        <br>13:00
                                                    </td>
                                                    <td>Caixa Amarela</td>
                                                    <td><?php  echo   uniqid('hadan_'); ?></td>

                                                    <td>
                                                        
                                                    <?php 
                                                      switch (1 ) {
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
                                                    <td><a class="link-dark text-decoration-none" href="#">Ver foto</a></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                     <td><a  class="link-dark" data-toggle="modal" data-target="#exampleModal">Ver</a></td>

                                                   

                                                    <td><button class="btn btn-info text-white m-1">Avisar</button>
                                                    <button class="btn btn-success m-1">Entregar</button>
                                                    </td>
                                                </tr> 


                                                <tr>
                                                    <td>Maria</td>
                                                    <td>28/01/2022
                                                        <br>13:00
                                                    </td>
                                                    <td>Caixa Azul</td>
                                                    <td><?php  echo   uniqid('maria_'); ?></td>

                                                    <td>
                                                        
                                                    <?php 
                                                      switch (2 ) {
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
                                                    <td><a class="link-dark text-decoration-none" href="#">Ver foto</a></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                     <td><a  class="link-dark" data-toggle="modal" data-target="#exampleModal">Ver</a></td>

                                                   

                                                    <td><button class="btn btn-info text-white m-1">Avisar</button>
                                                    <button class="btn btn-success m-1">Entregar</button>
                                                    </td>
                                                </tr> 

                                                <tr>
                                                    <td>Miranda</td>
                                                    <td>28/01/2022
                                                        <br>13:00
                                                    </td>
                                                    <td>Caixa Verde</td>
                                                    <td><?php  echo   uniqid('miranda_'); ?></td>

                                                    <td>
                                                        
                                                    <?php 
                                                      switch (3) {
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
                                                    <td><a class="link-dark text-decoration-none" href="#">Ver foto</a></td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                     <td><a  class="link-dark" data-toggle="modal" data-target="#exampleModal">Ver</a></td>

                                                   

                                                    <td><button class="btn btn-info text-white m-1">Avisar</button>
                                                    <button class="btn btn-success m-1">Entregar</button>
                                                    </td>
                                                </tr> 
                                                
                                                
                                                
                                           
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
         <span>Foto:</span><i class="fas fa-4x fa-user"></i>
         <br>
       <span>Nome:</span>Carlos
       <br>
       <span>CPF:</span>445.232.232-06
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>             
                        

                
                </main>
              <?php include("footer.php");?>