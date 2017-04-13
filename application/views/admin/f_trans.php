<form action="<?php echo base_URL()?>apps/trans/act_add" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_trans" onsubmit="return cek()">	
	<fieldset><legend>Detil Pinjam</legend>
	<?php echo $this->session->flashdata("k");?>
	<input type="hidden" name="jml_buku" value="<?php echo $jml_buku?>">
	
	<div class="well">
	<label style="width: 150px; float: left">ID Anggota</label><input class="span2" type="text" name="id_anggota" value="<?php echo $det_anggota->id?>"required readonly> &nbsp;<input class="span4" type="text" name="nama" value="<?php echo $det_anggota->nama?>" readonly><br>
	<label style="width: 150px; float: left">Tanggal Pinjam</label><input class="span2" type="text" name="tgl_pinjam" value="<?php echo date('Y-m-d')?>"readonly><br>
	<label style="width: 150px; float: left">Tanggal Kembali</label><input class="span2" type="text" name="tgl_kembali" value="<?php echo adddate(7)?>" readonly><br>
	<label style="width: 150px; float: left">Keterangan/Catatan</label><textarea class="span6" name="ket"></textarea><br>
	</div>
	
	<legend>Masukkan Data Buku</legend>
	<div class="well">
	
	<?php 
	for ($i = 1; $i <= $jml_buku; $i++) {
	?>
	<label style="width: 150px; float: left">Buku Ke-<?php echo $i?></label>
	<input class="span1" type="text" name="id_buku_<?php echo $i?>" id="id_buku_<?php echo $i?>" placeholder="ID Buku" required readonly> &nbsp;
	<input class="span6" type="text" name="judul_buku_<?php echo $i?>" placeholder="Judul Buku" id="judul_buku_<?php echo $i?>" readonly> &nbsp; 
	<a href="#" class="btn btn-info col-lg-2" onclick="return show_modal(<?php echo $i; ?>);">Cari</a><br>
	<?php 
	}
	?>
	<input type="submit" value="Simpan" class="btn btn-success"><br>
	</div>
	
	</fieldset>
</form>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  style="display: none">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Cari Kode</h4>
				</div>
				
				<div class="modal-body">
					<form method="post" action="" id="cari_kode">
						<input type="hidden" name="id_baris" id="id_baris">
						<input type="text" name="kata_kunci" id="kata_kunci" class="form-control col-lg-10" required>&nbsp;&nbsp;
						<input type="submit" value="Cari" class="btn btn-success">
					</form>	
					<br>
					<div id="hasil_cari"></div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
		function isikan_kode(id_baris, id, judul) {
			$("#id_buku_"+id_baris).val(id);
			$("#judul_buku_"+id_baris).val(judul);
			$('#myModal').modal('hide');
			return false;
		}
		
		function show_modal(id) {
			$("#id_baris").val(id);
			$('#myModal').modal('show');
			$("#hasil_cari").html("");
			return false;
		}
		
		$("#cari_kode").submit(function(event) {
			event.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>apps/jq_cari_kode",
				data: $("#cari_kode").serialize(),
				success: function(response) {
					$("#hasil_cari").html(response);
				}
			});
        });
		

	function cek() {
		<?php 
		for ($i = 1; $i <= $jml_buku; $i++) {
		?>
		var x_<?php echo $i?> = document.forms["f_trans"]["id_buku_<?php echo $i?>"].value;
		<?php 
		}
		?>
		
		<?php 
		for ($j = 1; $j <= $jml_buku; $j++) {
		?>
		
		if ( x_<?php echo $j?> == "") {
		  alert("Pilihlah buku isian buku ke - <?php echo $j?>");
		  openbuku(<?php echo $j?>)
		  return false;
		} 
		<?php 
		}

		for ($k = 1; $k < $jml_buku; $k++) {
		?>
		
		if ( x_<?php echo $k+1?> == x_<?php echo $k?>) {
		  alert("Pilihan buku ke - <?php echo $k+1?> tidak boleh sama dengan sebelumnya");
		  return false;
		} 
		<?php 
		}
		?> 
		
	}


		</script>	
	
