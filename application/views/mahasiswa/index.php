<div class="container">	
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php unset($_SESSION['flash']); ?>
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
			<?php if (empty($mahasiswa)): ?>
				<div class="alert alert-danger" role="alert">
				  Data Mahasiswa Tidak Ditemukan
				</div>
			<?php endif; ?>
			<ul class="list-group">
			<?php foreach ($mahasiswa as $mhs): ?>
				<li class="list-group-item">
				    <?= ++$start; ?>
				    <?= $mhs['nama']; ?>
				  	<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right" style="margin-left: 2px;"><i class="fas fa-info"></i></a>
				  	<a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right" style="margin-left: 2px;"><i class="fas fa-user-edit"></i></a>
				  	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right tombol-hapus"><i class="far fa-trash-alt"></i></a>
			  	</li>	  
			<?php endforeach; ?> 
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>