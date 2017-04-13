<legend>Detil Peminjaman : <?php echo getNama($id_anggota)?></legend>		
	<?php echo $this->session->flashdata("k");?>
	
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="40%">Judul Buku</th>
			<th width="17%">Tgl. Pinjam <br> Tgl. Kembali</th>
			<th width="10%">Status</th>
			<th width="10%">Terlambat</th>
			<th width="10%">Denda</th>
		</tr>
		
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='6'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$i = 0;
			foreach ($data as $b) {
			$i++;
		?>
		<tr>
			<td style="text-align: center"><?php echo $i; ?></td>
			<td><b><?php echo getJudul($b->id_buku)?></b></td>
			<td style="text-align: center"><?php echo tgl_panjang($b->tgl_pinjam, "sm")?><br><?php echo tgl_panjang($b->tgl_kembali, "sm")?></td>
			<td style="text-align: center"><?php echo $b->stat?></td>
			<td style="text-align: center"><?php echo $b->telat?> hari</td>
			<td style="text-align: center"><?php echo number_format($b->denda)?></td>
		</tr>	
		<?php 
			}
		}
		?>
	</table>
