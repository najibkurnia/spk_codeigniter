
<div class="jarallax w3ls-services agile-section" id="services">
	<div class="container">
		<h3 class="hdg agileits-title" style="color: orange; text-align: center;" id="h3.-bootstrap-heading">Detail Karyawan</h3>
		<div class="w3-agileits-service-grids">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<td width="200">Nama Karyawan</td>
						<td><?php echo $karyawan['nama_karyawan']; ?></td>
					</tr>
					<tr>
						<td>Kepala Karyawan</td>
						<td><?php echo $karyawan['nama_kepsek'] ?></td>
					</tr>
					<tr>
						<td>Alamat Karyawan</td>
						<td><?php echo $karyawan['alamat_karyawan'] ?></td>
					</tr>
					<tr>
						<td>Visi</td>
						<td><?php echo $karyawan['visi'] ?></td>
					</tr>
					<tr>
						<td>Misi</td>
						<td><?php echo $karyawan['misi'] ?></td>
					</tr>
					<tr>
						<td>No.Telp Karyawan</td>
						<td><?php echo $karyawan['no_telpon'] ?></td>
					</tr>
					<th colspan="2">Kategori Unggulan</th>
					<?php foreach ($kriteria as $k): ?>
						<tr>
							<td><?php echo $k->nama_kriteria ?></td>
							<td><?php echo $k->nama_subkriteria ?></td>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
				
			<div class="clearfix"> </div>
		</div>
	</div>
</div>	


<!-- gallery -->
<div class="jarallax w3ls-gallery agile-section" id="gallery" >
	<h3 class="agileits-title">gallery</h3>
	<ul class="w3l-grid">
		<li class="col-md-3"><a href="<?php echo base_url() ?>frontend/web/images/11.jpg" data-imagelightbox="g" data-ilb2-caption="Duis lobortis in ex sed cursus."><img src="<?php echo base_url() ?>frontend/web/images/11.jpg" class="img-responsive" alt="gallery"></a></li>
		<li class="col-md-3"><a href="<?php echo base_url() ?>frontend/web/images/14.jpg" data-imagelightbox="g" data-ilb2-caption="Sed accumsan auctor lacus ac mattis."><img src="<?php echo base_url() ?>frontend/web/images/14.jpg" class="img-responsive" alt="gallery"></a></li>
		<li class="col-md-3"><a href="<?php echo base_url() ?>frontend/web/images/15.jpg" data-imagelightbox="g" data-ilb2-caption="Duis lobortis in ex sed cursus."><img src="<?php echo base_url() ?>frontend/web/images/15.jpg" class="img-responsive" alt="gallery"></a></li>
		<li class="col-md-3"><a href="<?php echo base_url() ?>frontend/web/images/9.jpg" data-imagelightbox="g" data-ilb2-caption="Sed accumsan auctor lacus ac mattis."><img src="<?php echo base_url() ?>frontend/web/images/9.jpg" class="img-responsive" alt="gallery"></a></li>
		<li class="col-md-3"><a href="<?php echo base_url() ?>frontend/web/images/12.jpg" data-imagelightbox="g" data-ilb2-caption="Duis lobortis in ex sed cursus."><img src="<?php echo base_url() ?>frontend/web/images/12.jpg" class="img-responsive" alt="gallery"></a></li>
		<li class="col-md-3"><a href="<?php echo base_url() ?>frontend/web/images/13.jpg" data-imagelightbox="g" data-ilb2-caption="Sed accumsan auctor lacus ac mattis."><img src="<?php echo base_url() ?>frontend/web/images/13.jpg" class="img-responsive" alt="gallery"></a></li>
	</ul>
	<div class="clearfix"></div>
</div>
<!-- //gallery -->

<!-- contact -->
<div class="jarallax agileits-contact agile-section" id="contact">
	<div class="container">
		<h3 class="agileits-title" style="color: orange;">Kontak Kami</h3>
		<div class="w3agile-contact">
			<div class="col-md-5 col-sm-5 col-xs-6 w3_agileits-contact-left">
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-map-signs" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>Alamat</h5>
						<p>Jl.Adiyaksa Baru, Kota Makassar.</p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>telepon</h5>
						<p>082394315392</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-11 col-xs-11  w3_agile-contact-text">
						<h5>email</h5>
						<a href="mailto:akbar_abustang@ymail.com">akbar_abustang@ymail.com</a>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="clearfix"></div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-6 contact-right-w3l">
				<form action="#" method="post">
					<input type="text" class="name" name="name" placeholder="Nama Depan" required="">
					<input type="text" class="name" name="name" placeholder="Nama Belakang" required="">
					<input type="email" class="name" name="name" placeholder="Email" required="">
					<input type="text" class="name" name="name" placeholder="Subject" required="">
					<textarea placeholder="Pesan Anda" required=""></textarea>
					<input type="submit" value="Kirim Pesan">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
<!-- //contact -->

