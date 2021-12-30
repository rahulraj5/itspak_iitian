<style> 
        table, th, td { 
            border: 1px black; 
        } 
 </style>
<div class="container-fluid">
	<div class="panel panel-headline">
		<div class="panel-heading">
			<h3 class="panel-title">Candidate Profile</h3>
			<!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
		</div>
		
		<div class="panel-body table-responsive">
			<table class="table table-hover" id="user_list_tab">
				<tr>
					<td>Name</td>
					<td><?php echo $categorydata["first_name"]?> <?php echo $categorydata["last_name"]?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $categorydata["email"]?> </td>
				</tr>
				<tr>
					<td>Number</td>
					<td><?php echo $categorydata["number"]?> </td>
				</tr>
				<tr>
					<td>Experience</td>
					<td><?php echo $categorydata["experience"]?></td>
				</tr>
				<tr>
					<td>Apply For</td>
					<td><?php echo $categorydata["applyfor"]?> </td>
				</tr>
				<tr>
					<td>CTC</td>
					<td><?php echo $categorydata["ctc"]?> </td>
				</tr>
				<tr>
					<td>Resume</td>
					<td><a href="<?php echo (!empty($categorydata['resume'])?  base_url().'uploads/resume/'.$categorydata['resume']:DEFULT_USER_IMG); ?>" target = "_blank"><?php echo $categorydata["resume"]; ?></a></td>
						
					<!-- <td><?php echo $categorydata["resume"]?> <?php echo (isset($vid) && !empty($vid) && $vid == $categorydata['id'] ? "selected" : ''); ?></td> -->
				</tr>
				<tr>
					<td>Reference</td>
					<td><?php echo $categorydata["reference"]?></td>
				</tr>
			</table>
		</div>		
		<?php
        
        
        ?>
	</div>
</div>		