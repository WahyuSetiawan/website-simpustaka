<legend>Laporan Data Buku</legend>

<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>cetak/data_buku', '_blank')">Cetak</button> 
<br>
	<h5>Total Buku yang dimiliki : <?php echo $jml?></h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="30%">Judul</th>
			<th width="20%">Pengarang</th>
			<th width="10%">Penerbit</th>
			<th width="5%">Tahun Terbit</th>
			<th width="5%">Jumlah Hal</th>
			<th width="10%">Lokasi</th>
			
		</tr>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='7' style='text-align: center'> - Tidak ada data - </td></tr>";
		} else {
			$no = 1;
			foreach($data as $d) {
		?>
		<tr>
			<td style="text-align: center"><?php echo $no?></td>
			<td style="text-align: left"><?php echo $d->judul?></td>
			<td style="text-align: left"><?php echo $d->pengarang?></td>
			<td style="text-align: center"><?php echo $d->penerbit?></td>
			<td style="text-align: center"><?php echo $d->th_terbit?></td>
			<td style="text-align: center"><?php echo $d->jml_hal?></td>
			<td style="text-align: center"><?php echo $d->nama?></td>
			
		</tr>	
		<?php
			$no++;
			}
		}
		?>
	</table>