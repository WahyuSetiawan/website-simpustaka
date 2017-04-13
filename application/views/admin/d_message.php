<legend>Data Management</legend>
			
	<?php echo $this->session->flashdata("k");?>
	
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Name (email)</th>
			<th width="35%">Message</th>
			<th width="15%">Post Date</th>
			<th width="20%">Control</th>
		</tr>
		
		<?php 
		$i = 0;
		foreach ($data as $b) {
		$i++;
		?>
		<tr>
			<td style="text-align: center"><?php echo $i; ?></td>
			<td><?php echo $b->nama ?> <br> <i><?php echo $b->email?></i></td>
			<td><?php echo $b->message?></td>
			<td><?php echo $b->tgl_post?></td>
		
			<td style="text-align: center">
			<a href="<?php echo base_URL()?>admin/message/edt/<?php echo $b->id?>"><span class="icon-pencil">&nbsp;&nbsp;</span></a>  
			<a href="<?php echo base_URL()?>admin/message/del/<?php echo $b->id?>" onclick="return confirm('Are you sure to delete \n <?php echo $b->nama?>..?');"><span class="icon-remove">&nbsp;&nbsp;</span></a>
			</td>
		</tr>	
		<?php 
		}
		?>
	</table>
