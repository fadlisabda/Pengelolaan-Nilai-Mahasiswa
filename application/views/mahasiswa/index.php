<div class="container">
	<?php if ($this->session->flashdata('flash')): ?>	
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
				      <th scope="col">tugas teori</th>
				      <th scope="col">uts teori</th>
				      <th scope="col">uas teori</th>
				      <th scope="col">tugas pratikum</th>
				      <th scope="col">uas pratikum</th>
				      <th scope="col">nilai teori</th>
				      <th scope="col">nilai pratikum</th>
				      <th scope="col">nilai akhir</th>
				      <th scope="col">nilai huruf</th>
				      <th scope="col">tombol</th>
				    </tr>
				</thead>
				<?php $i=1; ?>
				<?php foreach ($mahasiswa as $mhs): ?>
					  <tbody>
					    <tr>
					      <td><?= $i; ?></td>	
					      <td><?= $mhs['nama']; ?></td>
					      <td><?= $mhs['npm']; ?></td>
					      <td><?= $mhs['tugasteori']; ?></td>
					      <td><?= $mhs['utsteori']; ?></td>
					      <td><?= $mhs['uasteori']; ?></td>
					      <td><?= $mhs['tugaspratikum']; ?></td>
					      <td><?= $mhs['uaspratikum']; ?></td>
						  <td><?= $mhs['nilaiteori']; ?></td>
						  <td><?= $mhs['nilaipratikum']; ?></td>
						  <td><?= $mhs['nilaiakhir']; ?></td>
						  <td><?= $mhs['nilaihuruf']; ?></td>
						  <td><a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a></td>
					    </tr>
					  </tbody>
				<?php $i++; ?>	  
				<?php endforeach; ?> 
				</table>
			</ul>
		</div>
	</div>
</div>