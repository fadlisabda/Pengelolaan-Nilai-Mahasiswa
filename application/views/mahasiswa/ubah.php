<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Form Ubah Data Mahasiswa
			  </div>
			  <div class="card-body">
				<form action="" method="post">
					<input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" autocomplete="off" value="<?= $mahasiswa['nama']; ?>">
						<small class="form-text text-danger"><?= form_error('nama'); ?></small>
					</div>
					<div class="form-group">
						<label for="npm">Npm</label>
						<input type="text" name="npm" class="form-control" id="npm" autocomplete="off" value="<?= $mahasiswa['npm']; ?>">
						<small class="form-text text-danger"><?= form_error('npm'); ?></small>
					</div>
					<div class="form-group">
						<label for="tugasteori">Tugas Teori</label>
						<input type="text" name="tugasteori" class="form-control" id="tugasteori" autocomplete="off" value="<?= $mahasiswa['tugasteori']; ?>">
						<small class="form-text text-danger"><?= form_error('tugasteori'); ?></small>
					</div>
					<div class="form-group">
						<label for="utsteori">Uts Teori</label>
						<input type="text" name="utsteori" class="form-control" id="utsteori" autocomplete="off" value="<?= $mahasiswa['utsteori']; ?>">
						<small class="form-text text-danger"><?= form_error('utsteori'); ?></small>
					</div>
					<div class="form-group">
						<label for="uasteori">Uas Teori</label>
						<input type="text" name="uasteori" class="form-control" id="uasteori" autocomplete="off" value="<?= $mahasiswa['uasteori']; ?>">
						<small class="form-text text-danger"><?= form_error('uasteori'); ?></small>
					</div>
					<div class="form-group">
						<label for="tugaspratikum">Tugas Pratikum</label>
						<input type="text" name="tugaspratikum" class="form-control" id="tugaspratikum" autocomplete="off" value="<?= $mahasiswa['tugaspratikum']; ?>">
						<small class="form-text text-danger"><?= form_error('tugaspratikum'); ?></small>
					</div>
					<div class="form-group">
						<label for="uaspratikum">Uas Pratikum</label>
						<input type="text" name="uaspratikum" class="form-control" id="uaspratikum" autocomplete="off" value="<?= $mahasiswa['uaspratikum']; ?>">
						<small class="form-text text-danger"><?= form_error('uaspratikum'); ?></small>
					</div>
					<button type="submit" name="ubah" class="btn btn-primary float-right" >Ubah Data</button>
				    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary float-right" style="margin-right: 2px;">Kembali</a>
				</form>
			  </div>
			</div>
		</div>
	</div>				
</div>