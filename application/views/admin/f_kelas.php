<?php
$mode	= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$nama		= $datpil->nama;
	$readonly	= "readonly";
	
} else {
	$act		= "act_add";
	$idp		= "";
	$nama		= "";
	$readonly	= "";
}
?>
<form action="<?php echo base_URL()?>apps/r_kelas/<?php echo $act?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
<input type="hidden" name="idp" value="<?php echo $idp?>">

	<fieldset><legend>Form</legend>
	<?php echo $this->session->flashdata("k");?>
	
	<label style="width: 150px; float: left">ID</label><input class="span1" type="text" name="idp2"  value="<?php echo $idp?>" <?php echo $readonly?>><br>
	<label style="width: 150px; float: left">Nama</label><input class="span8" type="text" name="nama" placeholder="Nama" value="<?php echo $nama?>" required><br>
	<button type="submit" class="btn btn-primary">Submit</button>
	</fieldset>
</form>