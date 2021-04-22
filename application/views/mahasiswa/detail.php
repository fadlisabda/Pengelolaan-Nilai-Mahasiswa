<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Detail Nilai Mahasiswa
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Nama : <?= $mahasiswa['nama']; ?></h5>
			    <h5 class="card-title">Npm : <?= $mahasiswa['npm']; ?></h5>
			    <p class="card-text">Tugas Teori : <?= $mahasiswa['tugasteori']; ?></p>
			    <p class="card-text">Uts Teori : <?= $mahasiswa['utsteori']; ?></p>
			    <p class="card-text">Uas Teori : <?= $mahasiswa['uasteori']; ?></p>
			    <p class="card-text">Tugas Pratikum : <?= $mahasiswa['tugaspratikum']; ?></p>
			    <p class="card-text">Uas Pratikum : <?= $mahasiswa['uaspratikum']; ?></p>
			    <p class="card-text">Nilai Teori : <?= $mahasiswa['nilaiteori']; ?></p>
			    <p class="card-text">Nilai Pratikum : <?= $mahasiswa['nilaipratikum']; ?></p>
			    <p class="card-text">Nilai Akhir : <?= $mahasiswa['nilaiakhir']; ?></p>
			    <p class="card-text">Nilai Huruf : <?= $mahasiswa['nilaihuruf']; ?></p>
			    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>								