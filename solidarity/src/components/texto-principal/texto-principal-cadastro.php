<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="cadastro-container">
        <h1 class="titulo-principal">
          <i class="fas fa-id-card mr-3 color-primary"></i>Cadastre-se. É rápido, fácil e <strong>grátis</strong>.
        </h1>
        <div class="formulario-de-cadastro">
          <ul class="nav nav-pillsmb-3 m-auto" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link link-tab" id="pills-ong-tab" data-toggle="pill" href="#pills-ong" role="tab" aria-controls="pills-ong" aria-selected="true"><i class="fas fa-university mr-2"></i>Represento uma ONG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-tab" id="pills-fisica-tab" data-toggle="pill" href="#pills-fisica" role="tab" aria-controls="pills-fisica" aria-selected="false"><i class="fas fa-users mr-2"></i>Pessoa Judirica (Doador)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-tab" id="pills-juridica-tab" data-toggle="pill" href="#pills-juridica" role="tab" aria-controls="pills-juridica" aria-selected="false"><i class="fas fa-user mr-2"></i>Pessoa Física (Doador)</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-ong" role="tabpanel" aria-labelledby="pills-ong-tab">
              <div class="section-divider"></div>
              <h5 class="titulo-cadastro">Cadastre sua ONG, seja beneficiado:</h5>
              <!-- FORMULARIO DE CADASTRO DAS ONGS -->
              <form id="formCadOng" action="../Solidarity/model/adiciona_pessoa.php" method="POST"  onsubmit="validacaoFormOng()">
                <div class="form-row">
                  <div class="form-group col-12">
                    <input name="tipoInstituicao" type="hidden" class="form-control" value="Ong">
                  </div>
                  <div class="form-group col-12">
                    <label for="nomeInst">Razão social:</label>
                    <input name="nome" type="text" class="form-control" placeholder="Razão" required/>
                  </div>                  
                  <div class="form-group col-7">
                    <label for="nomeInst">Nome da instituição</label>
                    <input name="nomeFantasia" type="text" class="form-control" placeholder="Nome" required/>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="cnpjOng">Número do CNPJ</label>
                    <input name="cnpj" type="number" class="form-control" placeholder="CNPJ" required/>
                  </div>
                  <div class="form-group col-12">
                    <label for="nomeInst">Endereço da Instituição:</label>
                    <input name="endereco" type="text" class="form-control" placeholder="Endereço" required/>
                  </div>
                  <!-- NO BANCO NÃO TEM CAMPO NÚMERO, É TUDO JUNTO!
                  <div class="form-group col-4">
                    <label for="nomeInst">Número</label>
                    <input type="text" class="form-control" placeholder="N°" />
                  </div>
                  --> 
                  <div class="form-group col-6">
                    <label for="nomeInst">Bairro</label>
                    <input name="bairro" type="text" class="form-control" placeholder="Bairro" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">CEP</label>
                    <input name="cep" type="text" class="form-control" placeholder="CEP" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Telefone</label>
                    <input name="telefone" type="text" class="form-control" placeholder="Digite o telefone" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Cidade</label>
                    <select name="cidade" class="custom-select mr-sm-2" id="cidadeOng" required>
                      <option selected>Escolha sua cidade</option>
                      <option>Santos</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Seu email:</label>
                    <input name="email" type="text" class="form-control" placeholder="Email" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Confirme seu email:</label>
                    <input name="confEmail" type="text" class="form-control" placeholder="Confirmar email" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Sua senha:</label>
                    <input name="senha" type="password" class="form-control" placeholder="Senha" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Confirme sua senha:</label>
                    <input name="confSenha" type="password" class="form-control" placeholder="Confirmar senha" required/>
                  </div>
                  <div class="form-group col-12">
                    <button type="submit" class="btn bg-solidarity color-branco">Cadastrar ONG</button>
                  </div>
                </div>
              </form>
              <!--FIM DO FORMULARIO DE CADASTRO -->
            </div>
            <div class="tab-pane fade" id="pills-fisica" role="tabpanel" aria-labelledby="pills-fisica-tab">
              <div class="section-divider"></div>
                <h5 class="titulo-cadastro">Cadastre sua empresa, seja um doador:</h5>
              <!-- FORMULARIO DE PESSOA JURIDICA -->
              <form id="formCadPj" method="POST" action="../Solidarity/model/adiciona_pessoa.php" onsubmit="validacaoFormPessoaJuridica()">
                <div class="form-row">
                  <div class="form-group col-12">
                    <input name="tipoInstituicao" type="hidden" class="form-control" value="PJ">
                  </div>                  
                  <div class="form-group col-12">
                    <label for="nomeInst">Razão social:</label>
                    <input name="nome" type="text" class="form-control" placeholder="Razão" required/>
                  </div>
                  <div class="form-group col-7">
                    <label for="nomeInst">Nome fantasia:</label>
                    <input name="nomeFantasia" type="text" class="form-control" placeholder="Nome da empresa" required/>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="cnpjOng">CNPJ da empresa</label>
                    <input name="cnpj" type="number" class="form-control" placeholder="CNPJ" required/>
                  </div>
                  <div class="form-group col-12">
                    <label for="nomeInst">Endereço da empresa</label>
                    <input name="endereco" type="text" class="form-control" placeholder="Endereço" required/>
                  </div>
                  <!-- NO BANCO NÃO TEM CAMPO NÚMERO, É TUDO JUNTO!
                  <div class="form-group col-4">
                    <label for="nomeInst">Número</label>
                    <input type="text" class="form-control" placeholder="N°" />
                  </div>
                  -->
                  <div class="form-group col-6">
                    <label for="nomeInst">Bairro</label>
                    <input name="bairro" type="text" class="form-control" placeholder="Bairro" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">CEP</label>
                    <input name="cep" type="text" class="form-control" placeholder="CEP" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Telefone</label>
                    <input name="telefone" type="text" class="form-control" placeholder="Telefone" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Cidade</label>
                    <select name="cidade" class="custom-select mr-sm-2" id="cidadePJ" required>
                      <option selected>Escolha sua cidade</option>
                      <option>Santos</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Seu email:</label>
                    <input name="email"type="text" class="form-control" placeholder="Email" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Confirme seu email:</label>
                    <input name="confEmail" type="text" class="form-control" placeholder="Confirmar email" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Sua senha:</label>
                    <input name="senha"type="password" class="form-control" placeholder="Senha" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Confirme sua senha:</label>
                    <input name="confSenha" type="password" class="form-control" placeholder="Confirmar senha" required/>
                  </div>
                  <div class="form-group col-12">
                    <button type="submit" class="btn bg-solidarity color-branco">Cadastrar empresa</button>
                  </div>
                </div>
              </form>
              <!--FIM DO FORMULARIO DE PESSOAS JURIDICA -->
            </div>
            <div class="tab-pane fade" id="pills-juridica" role="tabpanel" aria-labelledby="pills-juridica-tab">
              <div class="section-divider"></div>
              <h5 class="titulo-cadastro">Cadastre-se, seja um doador:</h5>
              <!-- FORMULARIO DE PESSOA FISICA -->
              <form id="formCadPf" action="../Solidarity/model/adiciona_pessoa.php" method="POST" onsubmit="validacaoFormPessoaFisica()">
                <div class="form-row">
                  <div class="form-group col-12">
                    <input name="tipoInstituicao" type="hidden" class="form-control" value="PF">
                  </div>                  
                  <div class="form-group col-12">
                    <label for="nomeInst">Nome completo:</label>
                    <input name="nome" type="text" class="form-control" placeholder="Nome" required/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cnpjOng">Data de Nascimento</label>
                    <input name="dtNasc" type="date" class="form-control" placeholder="Data de Nascimento" required/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cnpjOng">CPF</label>
                    <input name="cpf" type="number" class="form-control" placeholder="CPF" required/>
                  </div>
                  <div class="form-group col-12">
                    <label for="nomeInst">Endereço</label>
                    <input name="endereco" type="text" class="form-control" placeholder="Endereço" required/>
                  </div>
                  <!-- NO BANCO NÃO TEM CAMPO NÚMERO, É TUDO JUNTO!
                  <div class="form-group col-4">
                    <label for="nomeInst">Número</label>
                    <input type="text" class="form-control" placeholder="N°" />
                  </div>
                  -->
                  <div class="form-group col-6">
                    <label for="nomeInst">Bairro</label>
                    <input name="bairro" type="text" class="form-control" placeholder="Bairro" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">CEP</label>
                    <input name="cep" type="text" class="form-control" placeholder="CEP" required/>
                  </div>
                  <div class="form-group col-4">
                    <label for="nomeInst">Telefone</label>
                    <input name="telefone" type="text" class="form-control" placeholder="Telefone" required/>
                  </div>
                  <div class="form-group col-4">
                    <label for="nomeInst">Sexo</label><br />
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="sexo" class="custom-control-input" value="Masculino">
                      <label class="custom-control-label" for="customRadioInline1">Masc</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="sexo" class="custom-control-input" value="Feminino">
                      <label class="custom-control-label" for="customRadioInline2">Fem</label>
                    </div>
                  </div>
                  <div class="form-group col-4">
                    <label for="nomeInst">Cidade</label>
                    <select name="cidade" class="custom-select mr-sm-2" id="cidadePF" required>
                      <option selected>Escolha sua cidade</option>
                      <option>Santos</option>
                    </select>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Seu email:</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Confirme seu email:</label>
                    <input name="confEmail" type="email" class="form-control" placeholder="Confirmar email" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Sua senha:</label>
                    <input name="senha" type="password" class="form-control" placeholder="Senha" required/>
                  </div>
                  <div class="form-group col-6">
                    <label for="nomeInst">Confirme sua senha:</label>
                    <input name="confSenha" type="password" class="form-control" placeholder="Confirmar senha" required/>
                  </div>
                  <div class="form-group col-12">
                    <button type="submit" class="btn bg-solidarity color-branco">Cadastre-se</button>
                  </div>
                </div>
              </form>
              <!--FIM DO FORMULARIO DE PESSOAS FISICA -->
            </div>
          </div>
          </div
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../Solidarity/src/js/valida_formulario_cadastro.js"></script>

