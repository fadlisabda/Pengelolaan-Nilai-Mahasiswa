<div class="container">
	<div class="media mt-4">
		<img src="<?= base_url(); ?>
		bootstrap/img/profile.jpg" alt="Fhadly Sabda Dinov" width="200" class="rounded-circle shadow">
		<div class="media-body ml-2">
			<h1>Tentang Pembuat Website Ini</h1>
			<p>Perkenalkan Nama Saya <?= $nama ?> ,Saya Adalah Seorang <?= $pekerjaan; ?> ,Umur Saya <?= $umur; ?> tahun, github saya bisa dilihat dibawah ini</p>
			<a href="https://github.com/fadlisabda" target="_blank">
				<img src="<?= base_url(); ?>
				bootstrap/img/ghlg.png" alt="instagramLogo" style="width: 40px; height: 40px;">
			</a>
		</div>
	</div>
	<h1 class="text-center">My Skills</h1>
	<div class="progress">
	  <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">C++</div>
	</div>
	<div class="progress">
	  <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">CSS</div>
	</div>
	<div class="progress">
	  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">HTML</div>
	</div>
	<div class="progress">
	  <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">PHP</div>
	</div>
</div>