<legend>Laporan Data Anggota</legend>

<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>cetak/data_anggota', '_blank')">Cetak</button> 
<br>
	<h5>Total anggota yang terdaftar aktif : <?php echo $jml?></h5>
	<table style="width: 100%; font-size: 10px"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="10%">ID Anggota</th>
			<th width="20%">Nama</th>
			<th width="30%">Alamat</th>
			<th width="5%">JK</th>
			<th width="7%">Agama</th>
			<th width="15%">TTL</th>
			<th width="10%">Status</th>
			<th width="7%">Jenis</th>
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
			<td style="text-align: left"><?php echo $d->id_anggota?></td>
			<td style="text-align: left"><?php echo $d->nama?></td>
			<td style="text-align: left"><?php echo $d->alamat?></td>
			<td style="text-align: center"><?php echo $d->jk?></td>
			<td style="text-align: center"><?php echo $d->agama?></td>
			<td style="text-align: left"><?php echo $d->tmp_lahir.", ".tgl_panjang($d->tgl_lahir, "sm")?></td>
			<td style="text-align: center"><?php echo $d->jenis?></td>
			<td style="text-align: center"><?php echo getAktif($d->stat)?></td>
		</tr>	
		<?php
			$no++;
			}
		}
		?>
	</table>