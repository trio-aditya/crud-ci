<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI - CRUD CI</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("assets/css/business-frontpage.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/plugins/DataTables/datatables.css"); ?>">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Informasi CRUD CI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Mahasiswa
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Sistem Informasi CRUD <i>CodeIgniter</i></h1>
                    <p class="lead mb-5 text-white-50">Selamat Datang di Sistem Informasi CRUD <i>(Create, Read, Update, Delete)</i> di <i>CodeIgniter</i> </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 mb-5">
                <h2>Mata Kuliah</h2>
                <hr>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Mata Kuliah</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="10%">No.</th>
                                        <th>Mata Pelajaran</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th width="10%">No.</th>
                                        <th>Mata Pelajaran</th>
                                        <th width="20%">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <h2>Hubungi Kami</h2>
                <hr>
                <address>
                    <strong>Tiga-O</strong>
                    <br>Rajabasa, Bandar Lampung
                    <br>Lampung
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>
                    087768797943
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">trio.aditya@gmail.com</a>
                </address>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Tiga-O 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/plugins/DataTables/datatables.min.js"); ?>"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>