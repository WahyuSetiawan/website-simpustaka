<legend>Data Management</legend>

<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>apps/anggota/add/', '_self')">Data Baru</button>
<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>cetak/anggota', '_blank')">Cetak Kartu Anggota</button>
<div class="pull-right">
<form action="<?php echo base_URL()?>apps/anggota/cari" method="post">
	<input type="text" name="q" style="width: 200px" placeholder="Masukkan kata kunci" required>
	<input type="submit" value="Cari" class="btn btn-primary" style="margin-top: -10px">
</form>
</div>
<br><br>
			
	<?php echo $this->session->flashdata("k");?>
	
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="23%">[ID] Nama</th>
			<th width="20%">T T L</th>
			<th width="25%">Alamat</th>
			<th width="20%">Jenis, Status</th>
			<th width="7%">Control</th>
		</tr>
		
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='6'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no	= $this->uri->segment(4);
			if ($no == "") {
				$i 	= 0;
			} else {
				$i = $no;
			}
			
			foreach ($data as $b) {
			$i++;
		?>
		<tr>
			<td style="text-align: center"><?php echo $i; ?></td>
			<td>(<?php echo $b->id_anggota ?>) - <?php echo $b->nama?><br><b><?php echo $b->jk?></b></td>
			<td><?php echo $b->tmp_lahir?>, <?php echo tgl_panjang($b->tgl_lahir, "sm")?></td>
			<td><?php echo $b->alamat?></td>
			<td><?php echo $b->jenis?>, <?php if ($b->stat == "1") { echo "Aktif"; } else { echo "Non Aktif"; }?>, <a href="<?php echo base_URL()?>apps/anggota/list_pinjam/<?php echo $b->id?>">Riwayat Pinjam</a></td>
			
			<td style="text-align: center">
			<a href="<?php echo base_URL()?>apps/anggota/edt/<?php echo $b->id?>"><span class="icon-pencil">&nbsp;&nbsp;</span></a>  
			<a href="<?php echo base_URL()?>apps/anggota/del/<?php echo $b->id?>" onclick="return confirm('Anda YAKIN menghapus data \n <?php echo $b->nama?>..?');"><span class="icon-remove">&nbsp;&nbsp;</span></a>
			</td>
		</tr>	
		<?php 
			}
		}
		?>
	</table>
	<center><div class="pagination pagination-small"><ul><?php echo $pagi?></ul></div></center>