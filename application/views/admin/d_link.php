<legend>Link Management</legend>

<button class="btn btn-primary" type="button" onclick="window.open('<?php echo base_URL(); ?>admin/link/add/', '_self')">New Entry</button>

<br><br>
			
	<?php echo $this->session->flashdata("k");?>
	
	<table width="100%"  class="table table-condensed">
		<tr>
			<th width="5%">No</th>
			<th width="25%">Link Name</th>
			<th width="50%">Target</th>
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
			<td><i><?php echo $b->href?></i> - <a href="<?php echo $b->href?>" target="_blank">Test</a></td>
			
			<td style="text-align: center">
			<a href="<?php echo base_URL()?>admin/link/edt/<?php echo $b->id?>"><span class="icon-pencil">&nbsp;&nbsp;</span></a>  
			<a href="<?php echo base_URL()?>admin/link/del/<?php echo $b->id?>" onclick="return confirm('Are you sure to delete \n <?php echo $b->name?>..?');"><span class="icon-remove">&nbsp;&nbsp;</span></a>
			</td>
		</tr>	
		<?php 
		}
		?>
	</table>
