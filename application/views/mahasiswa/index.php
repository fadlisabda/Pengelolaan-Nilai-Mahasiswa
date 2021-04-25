<div class="container">	
	<?php if ($this->session->flashdata('flash')): ?>	
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
			  <?php unset($_SESSION['flash']); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="<?= base_url('mahasiswa'); ?>" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari Nama/Npm Mahasiswa.."
				  name="cari" autocomplete="off" autofocus>
				  <div class="input-group-append">
				    <input class="btn btn-primary" type="submit" name="kirim">
				  </div>
				</div>
			</form>
		</div>
	</div>	

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Nilai Mahasiswa</h3>
			<h5>Result : <?= $total_rows; ?></h5>
			<table class="table table-hover">
			<thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">nama</th>
			      <th scope="col">npm</th>
			      <th scope="col">tombol</th>
			    </tr>
			</thead>
			<?php foreach ($mahasiswa as $mhs): ?>
				  <tbody>
				  	<?php if (empty($mahasiswa)): ?>
						<tr>
							<td colspan="4">
								<div class="alert alert-danger" role="alert">
								  Data Tidak Ditemukan
								</div>
							</td>
						</tr>	
					<?php endif; ?>
				    <tr>
				      <td><?= ++$start; ?></td>	
				      <td><?= $mhs['nama']; ?></td>
				      <td><?= $mhs['npm']; ?></td>
					  <td>
					  	<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail Nilai</a>
					  	<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success">Ubah</a>
					  	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
					  </td>
				    </tr>
				  </tbody>	  
			<?php endforeach; ?> 
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>