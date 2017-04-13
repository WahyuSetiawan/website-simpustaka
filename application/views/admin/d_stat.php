<legend>10 Buku Paling Banyak Dipinjam</legend>		
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="80%">Judul Buku</th>
			<th width="15%">Banyak Peminjaman</th>
		</tr>
		
		
		<?php 
		if (empty($buku_paling_banyak_dipinjam)) {
			echo "<tr><td colspan='6'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$i = 0;
			foreach ($buku_paling_banyak_dipinjam as $a) {
			$i++;
		?>
		<tr>
			<td style="text-align: center"><?php echo $i; ?></td>
			<td><b><?php echo $a->judul?></b></td>
			<td style="text-align: center"><b><?php echo $a->jumlah_pinjam?></b> kali</td>
			
		</tr>	
		<?php 
			}
		}
		?>
	</table>

<!-- Anggota paling aktif -->
<legend>10 Anggota Paling Banyak Meminjam</legend>		
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="80%">Nama Anggota</th>
			<th width="15%">Banyak Peminjaman</th>
		</tr>
		
		
		<?php 
		if (empty($anggota_paling_banyak_meminjam)) {
			echo "<tr><td colspan='6'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$i2 = 0;
			foreach ($anggota_paling_banyak_meminjam as $b) {
			$i2++;
		?>
		<tr>
			<td style="text-align: center"><?php echo $i2; ?></td>
			<td><b><?php echo $b->nama;?></b></td>
			<td style="text-align: center"><b><?php echo $b->jumlah_pinjam?></b> kali</td>
			
		</tr>	
		<?php 
			}
		}
		?>
	</table>
