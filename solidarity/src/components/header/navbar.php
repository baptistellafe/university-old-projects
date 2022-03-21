<nav class="navbar navbar-expand-lg navbar-light solidarity-navbar navbar-solidarity">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./src/img/logo/solidarity.png" alt="Solidarity" title="Solidarity" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-left mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link link" href="index.php"><i class="fas fa-home mr-2 awesome-menu"></i>ínicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link" href="projetos.php"><i class="fas fa-briefcase mr-2 awesome-menu"></i>Projetos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link" href="instituicoes.php"><i class="fas fa-university mr-2 awesome-menu"></i>Instituições</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-heart mr-2 awesome-menu"></i>Solidarity
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item sublink" href="sobre.php"><i class="fas fa-info mr-2 awesome-menu"></i>Sobre Nós</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link" href="contato.php"><i class="fas fa-envelope mr-2 awesome-menu"></i>Contato</a>
                            </li>
                        </ul>
                    </div>
                    <button data-toggle="modal" data-target="#modalLogin" type="button" class="btn btn-sm btn-navbar">
                        <i class="fas fa-lock mr-2"></i>Fazer Login
                    </button>
                </div>
            </nav>

            <!-- Modal -->
            <div class="modal modal-solidarity fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-backgrop modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title titulo-modal" id="exampleModalLongTitle"><i class="fas fa-sign-in-alt mr-2 color-graphite"></i>Entre na sua conta</h5>
                            <button type="button" class="close fechar-modal" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <!-- LOGIN E SENHA -->
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha" required>
                                </div>
                                <button type="submit" class="btn btn-sm color-branco bg-graphite">Entrar na conta</button>
                                <br />
                                <a class="link-form mt-3" href="cadastro.php">Não sou cadastrado</a>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-falha" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
