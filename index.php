<!DOCTYPE html>
<html  lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clientes - Antares Barbearia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/site.css">


</head>

<body>


    <!-- ===== NAVBAR PRINCIPAL ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">

        <div class="container-fluid">


            <!-- Brand à esquerda -->

            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <!-- Evite espaços no nome do arquivo; renomeie ou use %20 -->
                <img src="img/LogoAPPBarbearias.png" alt="Ícone Barbearia" width="40" height="40" class="me-2">

            </a>

            <!-- Botão de menu para mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Itens de navegação -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Empurra para a direita -->
                <div class="d-flex align-items-center me-auto">

                    <!-- Campo de busca discreto -->
                    <form class="d-flex me-3" role="search" action="busca.html" method="get">
                        <input class="form-control form-control-sm me-2 campo-busca"
                               type="search"
                               name="q"
                               placeholder="Buscar..."
                               aria-label="Buscar">
                        <button class="btn btn-outline-light btn-sm" type="submit">Buscar</button>
                    </form>
 

                    <!-- Link Meus Agendamentos -->

                    <a class="btn btn-sm btn-meus-agendamentos"
                       href="#"
                       data-bs-toggle="modal"
                       data-bs-target="#agendamentoModal">
                        Meus Agendamentos
                    </a>

                    <div class="modal fade" id="agendamentoModal" tabindex="-1" aria-labelledby="agendamentoModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="agendamentoModalLabel">Meus Agendamentos</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body" id="agendamento-info">
                                    <!-- Conteúdo será preenchido via JavaScript -->
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="d-flex align-items-center w-100">

            <!-- Botão Idioma à esquerda -->
            <button id="btnIdioma" class="btn btn-sm btn-idioma me-auto" data-bs-toggle="modal" data-bs-target="#idiomaModal">
                🇧🇷 BR
            </button>

            <!-- Botão de Login com ícone -->
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-light btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <!-- Ícone SVG de usuário -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#ccc" class="me-2" viewBox="0 0 24 24">
                        <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                    </svg>
                    Entrar
                </button>
            </div>







        </div>

    </nav>




    <!--Incone Antares-Barbearia-->

    <div class="header-wrapper" style="position: relative;">

        <div class="icone-lateral">
            <img src="img/LogoDaAntaresBabearia.png" alt="Logo">
            <span class="nome-barbearia">Antares Barbearia</span>

        </div>
    </div>

    <!--Segunda--NaveBar-->
    <nav class="navbar-segunda">
        <a href="#servicos">Serviços</a>
        <a href="#profissionais">Profissionais</a>
        <a href="#fidelidade">Fidelidade</a>
        <a href="#produtos">Produtos</a>
        <a href="#pacotes">Pacotes</a>
        <a href="#assinaturas">Assinaturas</a>
        <a href="#avaliacoes">Avaliações</a>
    </nav>





    <!-- Botão Agende Agora alinhado à direita -->
    <div class="d-flex justify-content-end w-100">
        <button class="btn btn-agende-agora" data-bs-toggle="modal" data-bs-target="#agendamentoRapidoModal">
            Agende Agora
        </button>
    </div>



    <div class="painel-lateral">
        <!-- Bloco 1: Localização -->
        <div class="bloco">
            <h3>📍 Localização</h3>
            <p>
                Avenida Adolfo Beranger Júnior, 441, 138<br>
                28909-030 São Cristóvão - Cabo Frio/RJ
            </p>
        </div>
        <hr>

        <!-- Bloco 2: Horário de Funcionamento -->
        <div class="bloco">
            <h3>🕒 Horário de Funcionamento</h3>
            <p>Segunda-Feira: 08:00 - 12:00<br>13:00 - 20:00</p>
            <p>Quarta-Feira: 08:00 - 12:00 / 13:00 - 20:00</p>
            <p>Quinta-Feira: 08:00 - 12:00 / 13:00 - 20:00</p>
            <p>Sexta-Feira: 08:00 - 12:00 / 13:00 - 20:00</p>
            <p>Sábado: 08:00 - 12:00 / 13:00 - 20:00</p>
        </div>
        <hr>
        <!-- Bloco 3: Formas de Pagamento -->
        <div class="bloco">
            <h3>💳 Formas de Pagamento</h3>
            <ul>
                <li>Dinheiro</li>
                <li>Cartão de Crédito</li>
                <li>Cartão de Débito</li>
                <li>Pix</li>
            </ul>
        </div>
        <hr>
        <!-- Bloco 4: Redes Sociais -->
        <div class="bloco">
            <h3>📱 Redes Sociais</h3>
            <div class="icones-redes">
                <!-- WhatsApp -->
                <a href="https://wa.me/5522981373519" target="_blank">
                    <img src="img/ImagemWhatssap.png" alt="WhatsApp">
                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/antares_barbearia_1/" target="_blank">
                    <img src="img/instagram-logotipo_971166-164497.jpg" alt="Instagram">
                </a>
            </div>
        </div>


        <hr>

        <!-- Bloco 5: Contato -->
        <div class="bloco">
            <h3>📞 Contato</h3>
            <p>(22) 981373519</p>
        </div>
    </div>


    <div class="img-central">
        <img src="img/ImagemareaCLiente.png" alt="Logo APP">
    </div>




    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <form id="formLogin" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label for="loginInput" class="form-label">Email ou Telefone</label>
                            <input type="text" class="form-control" id="loginInput" name="Login" placeholder="Digite seu email ou número" required>
                        </div>
                        <div class="mb-3">
                            <label for="senhaInput" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senhaInput" name="Password" placeholder="Digite sua senha" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMeCheck">
                            <label class="form-check-label" for="rememberMeCheck">Manter conectado</label>
                        </div>

                        <button type="submit" id="btnLogin" class="btn btn-azul-marinho w-100">Entrar</button>
                        <div id="loginMensagem" class="text-danger mt-2" role="alert"></div>
                    </form>

                    <div class="text-center mt-3">
                        <button id="btnGoogleLogin" class="btn btn-outline-light w-100 d-flex align-items-center justify-content-center" onclick="window.location.href='/Conta/LoginGoogle'">
                            <img src="img/Google.App.jpg" alt="Google" width="20" class="me-2">
                            Entrar com Google
                        </button>
                    </div>

                    <div class="text-center mt-3">
                        <small>
                            Não tem uma conta?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#cadastroModal">Cadastre-se</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de Cadastro -->
    <div class="modal fade" id="cadastroModal" tabindex="-1" aria-labelledby="cadastroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadastroModalLabel">Cadastro</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário com ID para o JS capturar -->
                    <form id="formCadastro" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" id="nome" name="NomeCompleto" placeholder="Digite seu nome" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="TelefoneComDDD" required pattern="\d{10,11}" title="Digite um número com DDD">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="Email" placeholder="Digite seu e-mail" required>
                        </div>

                        <div class="mb-3">
                            <label for="senhaCadastro" class="form-label">Senha (mínimo 4 caracteres)</label>
                            <input type="password" class="form-control" id="senhaCadastro" name="Senha" placeholder="Crie uma senha" required minlength="4">
                        </div>

                        <div class="mb-3">
                            <label for="confirmarSenha" class="form-label">Confirmar senha</label>
                            <input type="password" class="form-control" id="confirmarSenha" name="ConfirmarSenha" placeholder="Repita a senha" required>
                        </div>

                        <button type="submit" class="btn btn-azul-marinho w-100">Cadastrar</button>
                        <div id="cadastroMensagem" class="mt-2"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal de Idiomas -->
    <div class="modal fade" id="idiomaModal" tabindex="-1" aria-labelledby="idiomaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header py-2">
                    <h6 class="modal-title" id="idiomaModalLabel">Escolha o idioma</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body p-2">
                    <ul class="list-unstyled m-0">
                        <li class="idioma-item" data-flag="🇧🇷" data-sigla="BR">🇧🇷 BR — Português (Brasil)</li>
                        <li class="idioma-item" data-flag="🇺🇸" data-sigla="EN">🇺🇸 EN — English (United States)</li>
                        <li class="idioma-item" data-flag="🇵🇹" data-sigla="PT">🇵🇹 PT — Português (Portugal)</li>
                        <li class="idioma-item" data-flag="🇪🇸" data-sigla="ES">🇪🇸 ES — Español (España)</li>
                        <li class="idioma-item" data-flag="🇫🇷" data-sigla="FR">🇫🇷 FR — Français (France)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap primeiro -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Variável global já disponível para o site.js -->
    <script>
        const usuarioLogado = @User.Identity.IsAuthenticated.ToString().ToLower(); // "true" ou "false"
    </script>

    <!-- Seu script por último -->
    <script src="/js/site.js"></script>



</body>

</html>


