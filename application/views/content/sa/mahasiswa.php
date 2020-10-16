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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>auth/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="col-md-8 mb-5">
    <h2>Data Mahasiswa</h2>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahData">
                Tambah Data
            </button>
            <br><br>
            <div class="table-responsive">
                <?php echo $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%">No.</th>
                            <th width="25%">NPM</th>
                            <th>Nama Lengkap</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $no = 1; ?>
                            <?php foreach ($mahasiswa as $value) : ?>
                                <td><?= $no ?></td>
                                <td><?= $value['npm']; ?></td>
                                <td><?= $value['nama']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $value['id_mahasiswa']; ?>">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </button>
                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>sa/mahasiswa/hapus_data/<?php echo $value['id_mahasiswa']; ?>" role="button">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                        </svg>
                                    </a>
                                </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                    </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="10%">No.</th>
                            <th width="25%">NPM</th>
                            <th>Nama Lengkap</th>
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

<!-- Start of Modal Tambah Data -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('sa/mahasiswa/proses_tambah_data'); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label><strong>NPM</strong></label>
                    <input type="number" name="npm" class="form-control">
                </div>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label><strong>Nama Lengkap</strong></label>
                    <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<!-- End of Modal Tambah Data -->


<!-- Start of Modal Edit Data -->
<?php $no = 0; ?>
<?php foreach ($mahasiswa as $value) : $no++ ?>
    <div class="modal fade" id="editmodal<?php echo $value['id_mahasiswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php echo form_open_multipart('sa/mahasiswa/proses_edit_data'); ?>
                <input type="hidden" name="id_mahasiswa" value="<?php echo $value['id_mahasiswa']; ?>"></input>
                <div class="modal-body">
                    <div class="form-group">
                        <label><strong>NPM Mahasiswa<strong></label>
                        <input type="number" name="npm" class="form-control" value="<?php echo $value['npm'] ?>">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label><strong>Nama Mahasiswa<strong></label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $value['nama'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<!-- End of Modal Edit Data -->