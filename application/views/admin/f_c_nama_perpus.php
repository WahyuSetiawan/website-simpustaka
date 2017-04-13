<?php
	$act			= "simpan";
	$idp			= $data->id;
	$nama			= $data->nama;
	$alamat			= $data->alamat;
	$logo			= $data->logo;
	$pimpinan		= $data->pimpinan;
	$pimpinan_nip	= $data->pimpinan_nip;
	$petugas		= $data->petugas;
	$petugas_nip	= $data->petugas_nip;
	$profil			= $data->profil;
	
?>
<form action="<?php echo base_URL()?>apps/nama_perpus/<?php echo $act?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
	<input type="hidden" name="idp" value="<?php echo $idp?>">

	<fieldset><legend>Nama Perpustakaan</legend>
	<?php echo $this->session->flashdata("k");?>	
	<label style="width: 250px; float: left">Nama Perpustakaan</label><input class="span8" type="text" name="nama" placeholder="Nama perpustakaan" value="<?php echo $nama?>" required><br>
	<label style="width: 250px; float: left">Alamat</label><input class="span8" type="text" name="alamat" placeholder="Alamat Perpustakaan" value="<?php echo $alamat?>" required><br>
	<label style="width: 250px; float: left">Logo Perpustakaan</label><input class="span4" type="file" name="logo" ><br>
	<label style="width: 250px; float: left">Pimpinan</label><input class="span6" type="text" name="pimpinan" placeholder="Nama Pimpinan" value="<?php echo $pimpinan?>" required><br>
	<label style="width: 250px; float: left">NIP Pimpinan</label><input class="span6" type="text" name="pimpinan_nip" placeholder="NIP Pimpinan" value="<?php echo $pimpinan_nip?>" required><br>
	<label style="width: 250px; float: left">Petugas</label><input class="span6" type="text" name="petugas" placeholder="Nama Petugas" value="<?php echo $petugas?>" required><br>
	<label style="width: 250px; float: left">NIP Petugas</label><input class="span6" type="text" name="petugas_nip" placeholder="NIP Petugas" value="<?php echo $petugas_nip?>" required><br>
	<label style="width: 250px; float: left">Profil Perpus</label><textarea class="span8" rows="10" name="profil" placeholder="Deskripsikan profil singkat perpustakaan ini"><?php echo $profil?></textarea><br>
	
	<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>

<script src="<?php echo base_URL()?>aset/editor/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({fullPanel : true}) });
</script>