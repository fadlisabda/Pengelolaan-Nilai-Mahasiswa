<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			  	<?php if (validation_errors()): ?>
				  	<div class="alert alert-danger" role="alert">
				  		<?= validation_errors(); ?>
					</div>
			  	<?php endif ?>
				<form action="" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="npm">Npm</label>
						<input type="text" name="npm" class="form-control" id="npm" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="tugasteori">Tugas Teori</label>
						<input type="text" name="tugasteori" class="form-control" id="tugasteori" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="utsteori">Uts Teori</label>
						<input type="text" name="utsteori" class="form-control" id="utsteori" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="uasteori">Uas Teori</label>
						<input type="text" name="uasteori" class="form-control" id="uasteori" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="tugaspratikum">Tugas Pratikum</label>
						<input type="text" name="tugaspratikum" class="form-control" id="tugaspratikum" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="uaspratikum">Uas Pratikum</label>
						<input type="text" name="uaspratikum" class="form-control" id="uaspratikum" autocomplete="off">
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>				
</div>