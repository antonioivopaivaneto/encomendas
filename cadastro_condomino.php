<?php include("header.php");




?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Usuarios</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Visualize ou registre novos usuarios</li>
                        </ol>
                       
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                        <a class="btn btn-info text-white" href="add_user_new.php">Adicionar Novo</a>
                                        <div class="table-responsive">
                                        <table class="table table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Foto</th>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Tipo</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">CPF</th>
                                                    <th scope="col">RG</th>
                                                    <th scope="col">Tel Emergencia</th>
                                                    <th scope="col">Whatsapp</th>

                                                    <th scope="col">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           
                                                <tr>
                                                    <th scope="row"><i class="fas fa-4x fa-user"></i></th>
                                                    <td>Hadan</td>
                                                    <td>
                                                        
                                                    <?php
                                                      switch (2) {
                                                        case 1:
                                                            echo "Executivo";
                                                            break;
                                                        case 2:
                                                            echo "Administrativo";
                                                            break;
                                                        case 3:
                                                            echo "Morador";
                                                            break;
                                                        case 4:
                                                              echo "Inquilino";
                                                              break;
                                                        case 5:
                                                            echo "Prestador de Serviços";
                                                            break;
                                                        }
                                                      
                                                      
                                                      ?></td>
                                                    <td>Hadan@solution.com.br</td>
                                                    <td>123.121.121-02</td>
                                                    <td>89.121.123-0</td>
                                                    <td>11 98056-2315</td>
                                                    <td><a href="https://api.whatsapp.com/send?phone=5511944005588&text=olá"> 1194400-5588</td>
                                                    <td><button class="btn btn-warning px-3"><i class="fas fa-1x far fa-edit"></i></button>
                                                    <button class="btn btn-danger px-3"><i class="fas fa-trash-alt"></i></button></td>
                                                </tr> 
                                                
                                               </tbody>
                                        </table>    
                                        </div>   
                        </div>
                       
                        
                
                </main>
              <?php include("footer.php");?>