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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/adminlte.min.css') }}">



    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- Adicione o arquivo de tradução para português -->
    <script src="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"></script>
    <!-- Adicione a extensão Buttons do DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>


    <!-- Incluir o CSS do DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Incluir o CSS do jQuery UI (para os seletores de data) -->
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Incluir o jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Incluir o JavaScript do DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Incluir o JavaScript do jQuery UI (para os seletores de data) -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                                <a href="/lista_terapeuta" class="nav-link text-white">
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
                                <a href="/dashboard" class="nav-link text-white">
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
                        <h1>Leitores</h1>
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
                    <h3 class="card-title">Leitores Cadastrados</h3>
                </div>
                <div class="card">
                    <!-- /.card-header -->

                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped" language="pt-br">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>e-mail</th>
                            <th>Telefone</th>
                            <th>Número do Cadastro</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($leitor as $v)
                            <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->nome }}</td>
                                <td>{{ $v->email }}</td>
                                <td>{{ $v->telefone }}</td>
                                <td>{{ $v->n_cadastro }}</td>
                                <td>
                                    <a href="{{ route('editar_leitor', $v->id) }}">
                                        <button type="submit" class="btn btn-warning container d-flex justify-content-center align-items-center" title="Editar um agendamento border-radius 20px">
                                            <ion-icon name="create"></ion-icon>
                                            Editar
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('excluir_leitor', $v->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-danger delete-btn width-auto container d-flex justify-content-center align-items-center"
                                                title="Excluir um agendamento">
                                            <ion-icon name="trash"></ion-icon>
                                            Excluir
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->

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
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/adminlte.min.js') }}"></script>


<script>
    $(document).ready(function () {
        var table = $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "language": {
                "search": "Pesquisar",
                "zeroRecords": "Nenhum dado encontrado.",
                "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                "infoFiltered": "(Filtrados de _MAX_ registros)",
                "infoThousands": ".",
                "loadingRecords": "Carregando...",
                "processing": "Processando...",
                "paginate": {
                    "first": '<i class="fas fa-angle-double-left"></i>',
                    "last": '<i class="fas fa-angle-double-right"></i>',
                    "previous": '<i class="fas fa-angle-left"></i>',
                    "next": '<i class="fas fa-angle-right"></i>'
                }
            },
            "buttons": [{
                extend: 'pageLength',
                className: 'btn btn-primary mr-2',
                dropup: true,
                text: function (dt, node, config) {
                    return dt.i18n('buttons.pageLength', 'Mostrar Linhas');
                }
            },

                {
                    extend: 'excel',
                    className: 'btn btn-primary',
                    text: 'Exportar para Excel'
                },

                {
                    extend: 'print',
                    className: 'btn btn-primary ml-2 mr-2',
                    text: 'Imprimir'
                },

                {
                    extend: 'colvis',
                    className: 'btn btn-primary',
                    text: 'Ocultar Colunas'
                },

            ],


            "lengthMenu": [
                [10, 20, 30, 50, -1],
                ['10 linhas', '20 linhas', '30 linhas', '50 linhas', 'Todas as linhas']
            ],
            "initComplete": function () {
                var btns = $('.btn-group');
                btns.addClass('dropup');
            }
        });

        table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>

</body>

</html>
