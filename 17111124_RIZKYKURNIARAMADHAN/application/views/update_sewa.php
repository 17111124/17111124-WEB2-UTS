	<div class="container">
		
		<div class="content">			
			<div class="judul-sewa">
				<img src="<?php echo base_url('assets/image/bg-bola.jpg')?>">
			</div>
			<h2 class="label-sewa">Ubah Data Sewa Lapang Futsal</h2>
			<div class="container-sewa">
				<?php foreach($data_sewa as $tpl){ ?>
					<form class="form" action="<?php echo base_url('Myadmin/update')?>" method="post">
						<div class="wadah-input">
							<label for="nama">Nama :</label><br>
							<input type="hidden" name="id" value="<?php echo $tpl->id ?>">
							<input class="inputan" type="text" name="nama" id="nama" value="<?php echo $tpl->nama ?>" placeholder="Nama Team" required>
						</div>
						<div class="wadah-input">	
							<label for="telpon">No.Handphone :</label><br>
							<input class="inputan" type="text" name="telpon" id="telpon" value="<?php echo $tpl->telpon ?>" placeholder="Nomor Handphone" required>
						</div>
						<div class="wadah-input">
							<label for="tanggal">Tanggal Main :</label><br>
							<input class="inputan" type="date" name="tanggal" id="tanggal" value="<?php echo $tpl->tanggal ?>" required>
						</div>
						<div class="wadah-input">
							<div class="mulai">
								<label for="mulai">Mulai :</label><br>
								<input class="inputan-waktu" type="time" name="mulai" id="mulai" value="<?php echo $tpl->mulai ?>" required>
							</div>
							<div class="selesai">
								<label for="selesai">Selesai :</label><br>
								<input class="inputan-waktu" type="time" name="selesai" id="selesai" value="<?php echo $tpl->selesai ?>" required>
							</div>
						</div>
						<div class="wadah-input-lapang">
							<label for="lapangan">Lapangan :</label><br>
							<select class="inputan-lapangan" id="lapangan" name="lapangan" value="<?php echo $tpl->lapangan ?>" required>
								<option value="">Pilih Lapangan</option>
								<option value="1">Lapang 1</option>
								<option value="2">Lapang 2</option>
								<option value="3">Lapang 3</option>
							</select>
						</div>
						<br>
						<div class="wadah-tombol">
							<input class="tombol" type="submit" name="submit" value="Edit">	
						</div>				
					</form>
				</div>

				<?php } ?>

				<div class="tanggal">
				<?php date_default_timezone_set("Asia/Jakarta"); ?>
				<h2 class="tgl"><?php echo date('l, d-m-Y');?></h2>
				<br>
				<h2 class="jam"><?php echo date('H:i:s a');?></h2>			
			</div>	
			<div class="card">
				<div class="front"><img width="250px" height="300px" src="<?php echo base_url('assets/image/admin.jpg'); ?>"></div>
				<div class="back">
					<div class="detail">
						<h2>Rizky Kurnia Ramadhan<br><span>Admin</span></h2>
						<div class="icon-sosmed">
							<a href=""><img width="12px" height="12px" src="<?php echo base_url('assets/image/icon-facebok.png'); ?>"></a>
							<a href=""><img width="12px" height="12px" src="<?php echo base_url('assets/image/icon-twitter.png'); ?>"></a>							
							<a href=""><img width="12px" height="12px" src="<?php echo base_url('assets/image/icon-linked.png'); ?>"></a>
							<a href=""><img width="12px" height="12px" src="<?php echo base_url('assets/image/icon-gmail.png'); ?>"></a>
							<a href=""><img width="12px" height="12px" src="<?php echo base_url('assets/image/icon-instagram.png'); ?>"></a>
						</div>	
					</div>
				</div>		
			</div>
			</div>
		</div>

