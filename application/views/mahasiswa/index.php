<div class="container">
	<div class="row mt-3">
		<div class="cold-md-6">
			<ul class="list-group">
				<h3>Daftar Mahasiswa</h3>
				<table class="table">
				<thead>
				    <tr>
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
				    </tr>
				</thead>
				<?php foreach ($mahasiswa as $mhs): ?>
					  
					  <tbody>
					    <tr>
					      <td><?= $mhs['nama']; ?></td>
					      <td><?= $mhs['npm']; ?></td>
					      <td><?= $mhs['tugasteori']; ?></td>
					      <td><?= $mhs['utsteori']; ?></td>
					      <td><?= $mhs['uasteori']; ?></td>
					      <td><?= $mhs['tugaspratikum']; ?></td>
					      <td><?= $mhs['uaspratikum']; ?></td>
					      <?php $nilaiteori=($mhs['tugasteori']*0.3)+($mhs['utsteori']*0.3)+($mhs['uasteori']*0.4) ?>
						  <?php $nilaipratikum=($mhs['tugaspratikum']*0.6)+($mhs['uaspratikum']*0.4) ?>
						  <?php $nilaiakhir=($nilaiteori*0.6)+($nilaipratikum*0.3) ?>
						  <td><?= $nilaiteori ?></td>
						  <td><?= $nilaipratikum ?></td>
						  <td><?= $nilaiakhir ?></td>
					    </tr>
					  </tbody>
				<?php endforeach; ?> 
				</table>
			</ul>
		</div>
	</div>
</div>