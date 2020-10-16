<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Informasi Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role_id') == '1') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>auth/logout">Logout</a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('role_id') != '1') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>auth/login">Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>