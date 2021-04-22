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
		<div class="cold-md-6">
			<ul class="list-group">
				<h3>Daftar Nilai Mahasiswa</h3>
				<table class="table">
				<thead>
				    <tr>
				      <th scope="col">no</th>
				      <th scope="col">nama</th>
				      <th scope="col">npm</th>
				    </tr>
				</thead>
				<?php $i=1; ?>
				<?php foreach ($mahasiswa as $mhs): ?>
					  <tbody>
					    <tr>
					      <td><?= $i; ?></td>	
					      <td><?= $mhs['nama']; ?></td>
					      <td><?= $mhs['npm']; ?></td>
						  <td>
						  	<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Hapus</a>
						  	<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail Nilai</a>
						  </td>
					    </tr>
					  </tbody>
				<?php $i++; ?>	  
				<?php endforeach; ?> 
				</table>
			</ul>
		</div>
	</div>
</div>