<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <title>Sistema de Gestão para Bibliotecas</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Leandro Carvalho</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    
                </div>
            </nav>
            <!-- Header-->
            <header class="pt-2">
                <div class="container px-5 pb-2">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Desafio  para Programador Pleno</div></div>
                                <div class="fs-3 fw-light text-muted">Criar um CRUD de Livros para uma Biblioteca! </div>
                                <h4 class="display-3 fw-bolder mb-5">
                                    <span class="text-gradient d-inline">
                                    Uma grande oportunidade de demonstrar minhas habilidades com Laravel
                                    </span>
                                </h4>
                                @guest 
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{ route('login') }}">Login </a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('register') }}">Cadastre-se</a>
                                </div>
                                @endguest

                                @auth
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ route('dashboard') }}">Painel Inicial</a>
                                @endauth
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="https://www.linkedin.com/in/leandro-frontend/"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="https://github.com/leandro2528"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <footer class="bg-white pt-4 mt-auto">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-center flex-column flex-sm-row">
                        <div class="col-auto"><div class="small m-0">Copyright &copy; Desenvolvido por Leandro Carvalho - 2024</div></div>
                        
                    </div>
                </div>
            </footer>
           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>

        