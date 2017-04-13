<legend>Laporan Pengunjung</legend>

<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>cetak/l_peminjam/hariini', '_blank')">Cetak Hari Ini</button> 
<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>cetak/l_peminjam/bulnini', '_blank')">Cetak Bulan Ini</button> 
<br>
	
	<h5>Peminjaman Hari ini</h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Nama Peminjam</th>
			<th width="35%">Judul Buku</th>
			<th width="10%">Tanggal Pinjam</th>
			<th width="10%">Tanggal Kembali</th>
			<th width="10%">Denda</th>
			<th width="5%">Status</th>
		</tr>
		<?php 
		if (empty($p_hariini)) {
			echo "<tr><td colspan='7' style='text-align: center'> - Tidak ada data - </td></tr>";
		} else {
			$no = 1;
			foreach($p_hariini as $phi) {
		?>
		<tr>
			<td style="text-align: center"><?php echo $no?></td>
			<td style="text-align: left"><?php echo $phi->nama?></td>
			<td style="text-align: left"><?php echo $phi->judul?></td>
			<td style="text-align: center"><?php echo $phi->tgl_pinjam?></td>
			<td style="text-align: center"><?php echo $phi->tgl_kembali?></td>
			<td style="text-align: center"><?php echo $phi->denda?></td>
			<td style="text-align: center"><?php echo $phi->stat?></td>
		</tr>	
		<?php
			$no++;
			}
		}
		?>
	</table>
	
	<h5>Peminjaman Bulan Ini</h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Nama Peminjam</th>
			<th width="35%">Judul Buku</th>
			<th width="10%">Tanggal Pinjam</th>
			<th width="10%">Tanggal Kembali</th>
			<th width="10%">Denda</th>
			<th width="5%">Status</th>
		</tr>
		<?php 
		if (empty($p_bulnini)) {
			echo "<tr><td colspan='7' style='text-align: center'> - Tidak ada data - </td></tr>";
		} else {
			$no2 = 1;
			foreach($p_bulnini as $pbi) {
		?>
		<tr>
			<td style="text-align: center"><?php echo $no2?></td>
			<td style="text-align: left"><?php echo $pbi->nama?></td>
			<td style="text-align: left"><?php echo $pbi->judul?></td>
			<td style="text-align: center"><?php echo $pbi->tgl_pinjam?></td>
			<td style="text-align: center"><?php echo $pbi->tgl_kembali?></td>
			<td style="text-align: center"><?php echo $pbi->denda?></td>
			<td style="text-align: center"><?php echo $pbi->stat?></td>
		</tr>	
		<?php
			$no2++;
			}
		}
		?>
	</table>