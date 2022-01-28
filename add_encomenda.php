<?php include("header.php");


include "classes/conexao.php";

$sql =" SELECT * FROM usuarios";
$result = mysqli_query($conn,$sql);

?>


            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Encomenda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Visualize ou registre novas encomendas</li>
                        </ol>
                       
                          <div class="row">
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">

                                        <h5 class="card-title">Nova Encomenda</h5>
                                        <p>Complete o formulário para cadastrar um novo usuario.</p>
                                        <form method="POST" action="#">
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="text">Add Foto</label>
                                                   <div class="image-upload">
                                                      <label for="file-input">
                                                        <i class="fas fa-4x fa-camera"></i>
                                                      </label>

                                                      <input id="file-input" type="file" hidden />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="text">Localizador</label>
                                                    <input type="text" class="form-control" id="text" placeholder="Nome" name="nome">
                                                </div>


                                                 <div class="form-group col-md-3">
                                                <label for="inputAddress2">Data de Recebimento</label>
                                                <input type="date" class="form-control" id="inputAddress2" placeholder="Data Nascimento" name="data">
                                            </div>

                                               <div class="form-group col-md-3">
                                                    <label for="text">Hora recebimento</label>
                                                    <input type="time" class="form-control" id="text" placeholder="Nome" name="nome">
                                                </div>

                                                

                                             
                                    
                                            </div>
                                            
                                             <div class="row">
                                       
                                            <div class="form-group col-md-2">
                                                    <label for="inputCity">Condomino</label>
                                                    <select id="inputState" class="form-control custom-select" name="morador">
                                                        <option selected>Selecione...</option>
                                                        <option value="sim">Sim</option>
                                                        <option value="nao">Não</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="inputAddress">Descrição Encomenda</label>
                                                <textarea  class="form-control" id="text"  name="apelido" ></textarea>
                                            </div>

                                               <div class="form-group col-md-3">
                                                    <label for="text">Situação da Encomenda</label>
                                                    <input type="text" class="form-control" id="text" placeholder="Pendente" name="nome" disabled>
                                                </div>
                                        </div>
                                           
                                            <div class="row">

                                                 <div class="form-group col-md-6 mt-3">
                                                    <div class="custom-control custom-checkbox">
                                                    <label for="celular">Enviar E-mail e Notificação Mobile ao Salvar?</label>

                                                    
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              
                                            </div>
                                            </div>


                                            <hr class="m-3">

                                           
    
                                              <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
                                        </div>
                                        </form>
                                    </div >
                                </div>
                            </div>
                        </div>

                       
                        
                
                </main>
              <?php include("footer.php");?>