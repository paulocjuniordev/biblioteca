<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('assets/logo.ida.png') }}" type="image"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset ('assets/css/leitor.css') }}">

</head>

<body class="hold-transition sidebar-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-blue navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item text-white d-none d-sm-inline-block">
                <a href="/dashboard" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">


            </li>
        </ul>

        <!-- Right navbar links -->
        <li class="dropdown ml-auto mr-5">
            <a class="dropdown-toggle text-white" data-toggle="dropdown">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
                <!-- <li><a href="/profile"><i class="fa fa-users"></i> User Profile</a></li>
                     <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                     <li> -->
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <ion-icon name="log-out-outline"></ion-icon>
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </li>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link text-center">
            <img src="#" alt="" class="brand-image " style="opacity: .8">
            <span class="brand-text font-weight-light">Teste</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <a href="../../index3.html" class="brand-link text-center">
                <span class="brand-text font-weight-light">{{ auth()->user()->name }}</span>
            </a>

            <!-- SidebarSearch Form -->


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <ion-icon name="person"></ion-icon>
                            <p>
                                Cadastro
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/leitor_create" class="nav-link text-white">
                                    <ion-icon name="return-down-forward"></ion-icon>
                                    <p>Cadastrar novo leitor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/livro_create" class="nav-link text-white">
                                    <ion-icon name="return-down-forward"></ion-icon>
                                    <p>Registrar novo livro</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <ion-icon name="albums-sharp"></ion-icon>
                            <p>
                                Consultar
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link text-white">
                                    <ion-icon name="return-down-forward"></ion-icon>
                                    <p>Lista de Livros</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/leitor_show" class="nav-link text-white">
                                    <ion-icon name="return-down-forward"></ion-icon>
                                    <p>Lista de Leitores</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/saida" class="nav-link text-white">
                                    <ion-icon name="return-down-forward"></ion-icon>
                                    <p>Lista de Livros Emprestados</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Cadastro de Livros</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Livros Cadastrados</h3>
                </div>
                <form class="form" action="/livro_store" method="post" id="formleitor">
                    @csrf
                    <div class="input-box">
                        <label>Nome do Livro</label>
                        <input type="text" name="nome" placeholder="Digite o nome do Livro" required="">
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Autor</label>
                            <input type="text" name="autor" placeholder="Informa o nome do Autor" required="">
                        </div>
                        <div class="input-box">
                            <label for="genero">Gênero</label>
                            <select name="genero"  required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Romance">Romance</option>
                                <option value="Drama">Drama</option>
                                <option value="Ação">Ação</option>
                                <option value="Ficção Científica">Ficção Científica</option>
                                <option value="Comédia">Comédia</option>
                                <option value="Baseado em Fatos Reais">Baseado em Fatos Reais</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <label>Código de Cadastro</label>
                            <input type="number" name="registro" id="registro" required="" readonly>
                        </div>
                        <div class="input-box">
                            <label for="genero">Status</label>
                            <select name="status"  required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="disponível">Disponível</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit">Salvar</button>
                </form>
            </div>
        </section>
    </div>
    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->

<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/adminlte.min.js') }}"></script>



<script src="{{ asset ('assets/js/livro.js') }}"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>

</body>

</html>

