	<div class="container">
	<div class="jumbotron jumbotron-fluid mt-3">
	  <div class="container">
	    <h1 class="display-4">Hello <?= $nama; ?></h1>
	    <p class="lead">Selamat Datang Di website pengelolaan nilai mahasiswa</p>
	    <p>Website Ini Dibuat Dengan Codeigniter 3 dan bootstrap 4</p>
	  </div>
	</div>
	<h2 class="text-center">Tampilan Yang Ada Didalam Website Ini</h2>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?= base_url(); ?>bootstrap/img/about.png" class="d-block w-100" alt="File Tidak Ada">
	    </div>
	    <div class="carousel-item">
	      <img src="<?= base_url(); ?>bootstrap/img/mahasiswa.png" class="d-block w-100" alt="File Tidak Ada">
	    </div>
	    <div class="carousel-item">
	      <img src="<?= base_url(); ?>bootstrap/img/pagination2.png" class="d-block w-100" alt="File Tidak Ada">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<h3 class="text-center mt-3">Fitur Yang Ada Di Website Ini</h3>
	<div class="row row-cols-1 row-cols-md-3">
	  <div class="col mb-4">
	    <div class="card border-primary">
	      <img src="<?= base_url(); ?>bootstrap/img/cari.png" class="card-img-top" alt="File Tidak Ada">
	      <div class="card-body text-primary">
	        <h5 class="card-title">Fitur Cari Data</h5>
	        <p class="card-text">Anda bisa mencari data mahasiswa dengan mengetikkan nama atau npm nya</p>
	      </div>
	    </div>
	  </div>
	  <div class="col mb-4">
	    <div class="card border-success">
	      <img src="<?= base_url(); ?>bootstrap/img/pagination.png" class="card-img-top" alt="File Tidak Ada">
	      <div class="card-body text-success">
	        <h5 class="card-title">Fitur Pagination</h5>
	        <p class="card-text">fitur ini untuk menampilkan data yang berbeda pada tabel</p>
	      </div>
	    </div>
	  </div>
	  <div class="col mb-4">
	    <div class="card border-secondary">
	      <img src="<?= base_url(); ?>bootstrap/img/pagination2.png" class="card-img-top" alt="File Tidak Ada">
	      <div class="card-body text-secondary">
	        <h5 class="card-title">Fitur generate mysql data dummy & Pagination</h5>
	        <p class="card-text">fitur ini hanya contoh menampilkan data 1000 orang dengan pagination</p>
	      </div>
	    </div>
	  </div>
	</div>
</div>
</div>	
