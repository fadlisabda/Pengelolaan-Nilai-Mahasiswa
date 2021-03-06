<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>bootstrap/fontawesome/css/all.css" rel="stylesheet">
    <title><?= $judul; ?></title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">		
	  <a class="navbar-brand" href="#">CI3 App</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-link active" href="<?= base_url(); ?>home/index/">Home <span class="sr-only">(current)</span></a>
	      <a class="nav-link" href="<?= base_url(); ?>about/index/">About</a>
	      <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
	      <a class="nav-link" href="<?= base_url(); ?>peoples">Peoples</a>
	    </div>
	  </div>
  </div>
</nav>