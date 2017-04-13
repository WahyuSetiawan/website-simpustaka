 <div class="span9">
		<ul class="breadcrumb wellwhite">
			<li><a href="<?php echo base_URL()?>">Beranda</a></li>
		</ul>
		
		<div class="span12 wellwhite" style="margin-left: 0px">
		<legend style="margin-bottom: 10px; font-size: 15px; font-weight: bold">Selamat Datang di Perpustakaan <?php echo $q_instansi->nama?></legend>
		<div class="row-fluid">
		
		<form action="<?php echo base_URL()?>depan/post_pengunjung" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		
        <h5>Silakan masukkan data kunjungan Anda, sebelum masuk ke perpustakaan. Terima kasih ... </h5>
		
		<?php echo $this->session->flashdata("k")?>
		<label style="width: 150px; float: left">Nama</label><input class="span6" type="text" name="nama" placeholder="Nama" required><br>
		<label style="width: 150px; float: left">Jenis Kelamin</label><select name="jk" required><option value="">[Pilih Jenis Kelamin]</option>
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>
		</select><br>		
		<label style="width: 150px; float: left">Jenis Anggota</label><select name="jenis" required><option value="">[Pilih Jenis Anggota]</option>
		<option value="siswa">Siswa</option>
		<option value="guru">Guru/Karyawan</option>
		<option value="umum">Umum</option>
		</select><br>
		<label style="width: 150px; float: left">Keperluan</label>
		</label><label><input type="checkbox" name="perlu1" value="Baca Buku"> Baca Buku</label>
		<label style="width: 150px; float: left"></label><label><input type="checkbox" name="perlu2" value="Pinjam Buku"> Pinjam Buku</label>
		<label style="width: 150px; float: left"></label><label><input type="checkbox" name="perlu3" value="Kembalikan Buku"> Kembalikan Buku</label>
		<label style="width: 150px; float: left"></label><label><input type="checkbox" name="perlu4" value="Cari Buku"> Cari Buku</label>
		<label style="width: 150px; float: left"></label><label><input type="checkbox" name="perlu5" value="Lainnya"> Lainnya</label>
		<br>		
		<label style="width: 150px; float: left">Saran & Kritik</label><textarea class="span8" type="text" name="saran" placeholder="Silakan masukkan saran kritik Anda"></textarea><br>		
		<button type="submit" class="btn btn-primary">Simpan</button>
		
		
        </div>
		</div>        
</div><!--/span-->