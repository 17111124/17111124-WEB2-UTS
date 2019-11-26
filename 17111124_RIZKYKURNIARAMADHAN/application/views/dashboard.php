<body>
	<div class="container">
		<div class="content">
			<div class="judul">
				<div class="bola">
					<img width="180px" height="180px" src="<?php echo base_url('assets/image/bola.png'); ?>">
				</div>
				<h2 class="filter">Filter Data Sewa</h2><p class="fitur">(Fitur belum dapat digunakan!)</p>
				<div class="box-nama">
					<input class="search" type="text" name="nama" placeholder="Nama Team" required>
				</div>
				<div class="box-tanggal">
					<input class="search" type="date" name="tanggal" id="tanggal" required>
				</div>
				<div class="box-lapangan">
					<select class="search"  name="lapangan" required>
					<option value="">Pilih Lapangan</option>
					<option value="1">Lapang 1</option>
					<option value="2">Lapang 2</option>
					<option value="3">Lapang 3</option>
				</select>
				</div>	
				<div class="box-search">
					<input class="tombol-search" type="submit" name="submit" value="SEARCH">	
				</div>			
			</div>

			<div class="data-sewa">
				<div class="head">
					<h4>Data Sewa Lapang Futsal</h4>	
				</div>
				<div class="data">
					<form>	
						<table class="table-sewa">			
							<thead align="center">
								<tr>
									<th>Id</th>
									<th>Nama Team</th>
									<th>Telpon</th>
									<th>Tanggal Main</th>
									<th>Mulai</th>
									<th>Selesai</th>
									<th>Lapangan</th>
									<th colspan="2">aksi</th>
								</tr>
							</thead>

							<tbody align="center">
								<?php 
								$no = 1;
								foreach ($tampil as $tpl) {
									echo "<tr>";
									echo "<td>".$no."</td>";
									echo "<td>".$tpl->nama."</td>";
									echo "<td>".$tpl->telpon."</td>";
									echo "<td>".$tpl->tanggal."</td>";
									echo "<td>".$tpl->mulai."</td>";
									echo "<td>".$tpl->selesai."</td>";
									echo "<td>".$tpl->lapangan."</td>";?>
									<td class="bg-edit"><a class="edit" href="<?php echo base_url('Myadmin/edit/'.$tpl->id)?>">Edit</a></td>
									<td class="bg-hapus"><a class="hapus" href="<?php echo base_url('Myadmin/hapus/'.$tpl->id)?>">Hapus</a></td>
									<?php
									echo "</tr>";
									$no++; 
								}								
								?>		
							</tbody>

						</table>
					</form>
				</div>
			</div>

		</div>
	</div>
</body>
</html>