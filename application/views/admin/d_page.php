<legend>Page Management</legend>

<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>admin/page/add/', '_self')">New Entry</button>

<br><br>
			
	<?php echo $this->session->flashdata("k");?>
	
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Page Name</th>
			<th width="50%">Contents</th>
			<th width="20%">Control</th>
		</tr>
		
		<?php 
		$i = 0;
		foreach ($data as $b) {
		$i++;
		?>
		<tr>
			<td style="text-align: center"><?php echo $i; ?></td>
			<td><?php echo $b->name ?></td>
			<td><?php echo substr(strip_tags($b->content), 0, 400) ?></td>
			
			<td style="text-align: center">
			<a href="<?php echo base_URL()?>admin/page/edt/<?php echo $b->id?>"><span class="icon-pencil">&nbsp;&nbsp;</span></a>  
			<!--<a href="<?php echo base_URL()?>admin/page/del/<?php echo $b->id?>" onclick="return confirm('Anda YAKIN menghapus data \n <?php echo $b->name?>..?');"><span class="icon-remove">&nbsp;&nbsp;</span></a>-->
			</td>
		</tr>	
		<?php 
		}
		?>
	</table>
