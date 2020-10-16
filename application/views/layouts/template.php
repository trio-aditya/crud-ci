<!-- Perintah untuk menampilkan header,
file header disimpan dalam 'views/layouts/header.php' -->
<?php $this->view('layouts/header'); ?>

<body>

    <!-- Perintah untuk menampilkan main menu,
	file main menu disimpan dalam 'views/layouts/main_menu.php' -->
    <?php $this->view('layouts/main_menu'); ?>

    <!-- Header -->
    <header class="bg-primary py-5 mb-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">Sistem Informasi Data Mahasiswa</h1>
                    <p class="lead mb-5 text-white-50">Selamat Datang di Sistem Informasi Data Mahasiswa dengan <i>Framework CodeIgniter</i> </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <?php echo $contents ?>
        </div>
    </div>
    <!-- /.container -->

    <!-- Perintah untuk menampilkan footer,
	file footer disimpan dalam 'views/layouts/footer.php' -->
    <?php $this->view('layouts/footer'); ?>