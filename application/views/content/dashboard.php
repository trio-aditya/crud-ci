<div class="col-md-8 mb-5">
	<h2>Data Mahasiswa</h2>
	<hr>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Daftar Data Mahasiswa</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="10%">No.</th>
							<th width="25%">NPM</th>
							<th>Nama Lengkap</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php $no = 1; ?>
							<?php foreach ($mahasiswa as $value) : ?>
								<td><?= $no ?></td>
								<td><?= $value['npm']; ?></td>
								<td><?= $value['nama']; ?></td>
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