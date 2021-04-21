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
						<input type="text" name="nama" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="npm">Npm</label>
						<input type="text" name="npm" class="form-control" id="npm">
					</div>
					<div class="form-group">
						<label for="tugasteori">Tugas Teori</label>
						<input type="text" name="tugasteori" class="form-control" id="tugasteori">
					</div>
					<div class="form-group">
						<label for="utsteori">Uts Teori</label>
						<input type="text" name="utsteori" class="form-control" id="utsteori">
					</div>
					<div class="form-group">
						<label for="uasteori">Uas Teori</label>
						<input type="text" name="uasteori" class="form-control" id="uasteori">
					</div>
					<div class="form-group">
						<label for="tugaspratikum">Tugas Pratikum</label>
						<input type="text" name="tugaspratikum" class="form-control" id="tugaspratikum">
					</div>
					<div class="form-group">
						<label for="uaspratikum">Uas Pratikum</label>
						<input type="text" name="uaspratikum" class="form-control" id="uaspratikum">
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>
		</div>
	</div>				
</div>