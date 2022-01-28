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
                            <div class="col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Novo Usuario</h5>
                                        <p>Complete o formulário para cadastrar um novo usuario.</p>
                                        <form method="POST" action="cadastro_encomenda.php" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="text">Add Foto</label>
                                                   <div class="image-upload">
                                                      <label for="file-input">
                                                        <i class="fas fa-4x fa-camera"></i>
                                                      </label>

                                                      <input id="file-input" name="arquivo" accept="image/*" type="file"  />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="text">Nome</label>
                                                    <input type="text" class="form-control" id="text" placeholder="Nome" name="nome">
                                                </div>


                                                 <div class="form-group col-md-3">
                                                    <label for="text">Senha</label>
                                                    <input type="password" class="form-control" id="senh" placeholder="senha" name="senha">
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label for="inputCity">Nivel de Acesso</label>
                                                    <select id="inputState" class="form-control custom-select" name="nivel">
                                                        <option selected>Selecione...</option>
                                                        <option  value="1">Executivo</option>
                                                        <option  value="2">Administrativo</option>
                                                        <option  value="3">Morador</option>
                                                        <option  value="4">Inquilino</option>
                                                        <option  value="5">Prestador de Serviço</option>
                                                    </select>
                                                </div>

                                                

                                             
                                    
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-2">
                                                    <label for="tel">Celular</label>
                                                    <input type="tel" class="form-control" id="tel" placeholder="Telefone" name="senha">
                                                </div>
                                               
                                                <div class="form-group col-md-3">
                                                    <label for="inputPassword4">CPF</label>
                                                    <input type="text" class="form-control" id="inputPassword4" placeholder="CPF" name="cpf">
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label for="inputPassword4">RG</label>
                                                    <input type="text" class="form-control" id="inputPassword4" placeholder="RG" name="rg">
                                                </div>

                                                <div class="form-group col-md-3">
                                                <label for="inputAddress">Email</label>
                                                <input type="mail" class="form-control" id="inputAddress" placeholder="Email" name="email">
                                            </div>

                                             
                                    
                                            </div>
                                             <div class="row">
                                       
                                            <div class="form-group col-md-2">
                                                    <label for="inputCity">É Morador</label>
                                                    <select id="inputState" class="form-control custom-select" name="morador">
                                                        <option selected>Selecione...</option>
                                                        <option value="sim">Sim</option>
                                                        <option value="nao">Não</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                <label for="inputAddress">Apelido</label>
                                                <input type="text" class="form-control" id="text" placeholder="Apelido" name="apelido">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="inputAddress2">Data de Nascimento</label>
                                                <input type="date" class="form-control" id="inputAddress2" placeholder="Data Nascimento" name="data">
                                            </div>

                                            <div class="form-group col-md-3">
                                                    <label for="inputState">Sexo</label>
                                                    <select id="inputState" class="form-control custom-select" name="sexo">
                                                        <option selected>Selecione...</option>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="feminino">Feminino</option>
                                                        <option value="Prefiro não dizer">Prefiro não dizer</option>
                                                    </select>
                                                </div>
                                        </div>
                                           
                                            <div class="row">

                                            
                                                
                                                
                                                <div class="form-group col-md-2">
                                                    <label for="celular">Contato para Emergência</label>
                                                    <input type="tel" class="form-control" id="celular" name="tel-emergencia">
                                                </div>

                                                 <div class="form-group col-md-6">
                                                    <label for="celular">Pode receber encomendas?</label>

                                                    <div class="custom-control custom-radio custom-control-inline">
                                                  <input type="radio" id="customRadioInline1" name="recebe_enc" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="customRadioInline1">Sim</label>
                                              
                                                
                                                  <input type="radio" id="customRadioInline2" name="recebe_enc" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="customRadioInline2">Não</label>
                                                  </div>
                                            </div>
                                            <hr class="m-3">

                                            <div class="row">
                                                <label for="opcoes">Notificações</label>
                                                <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">Enquetes</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">Informativo ,Classificados e Fornecedores</label>
                                            </div>
                                             <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                              <label class="custom-control-label" for="customCheck1">Avisos,Informativos e Eventos</label>
                                            </div>
                                             <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">Finanças e consumo</label>
                                            </div>
                                                
                                            </div>
    
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