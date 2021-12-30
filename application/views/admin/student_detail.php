<style> 

        table, th, td { 

            border: 1px black; 

        } 

 </style>

<div class="container-fluid">

	<div class="panel panel-headline">

		<div class="panel-heading">
			<div class="col-md-6">
				<h3 class="panel-title">Student Profile</h3>
			</div>
			
			<div class="col-md-6">
				<a href="<?php echo (!empty($categorydata['photo'])?  'https://www.admissionform.driitian.com/'.'uploads/'.$categorydata['photo']:DEFULT_USER_IMG); ?>" target = "_blank" class="image-link"><img src="<?php echo (!empty($categorydata['photo'])? 'https://www.admissionform.driitian.com/'.'uploads/'.$categorydata['photo']:DEFULT_USER_IMG); ?>" class="user_image" style="height: 55px;"></a>	
			</div>
			
				
			
		</div>

		

		<div class="panel-body table-responsive">

			<table class="table table-hover" id="user_list_tab">

				<tr>

					<td>Form No.</td>

					<td><?php echo $categorydata["form_no"]?></td>

				</tr>

				<tr>

					<td>Name</td>

					<td><?php echo $categorydata["name"]?></td>

				</tr>

				

				<tr>

					<td>Student Contact No.</td>

					<td><?php echo $categorydata["number"]?> </td>

				</tr>

				<tr>

					<td>Father Name</td>

					<td><?php echo $categorydata["father_name"]?> </td>

				</tr>

				<tr>

					<td>Father Number</td>

					<td><?php echo $categorydata["father_number"]?></td>

				</tr>

				<tr>

					<td>Apply For Course</td>

					<td><?php echo $categorydata["course"]?> </td>

				</tr>

				<tr>

					<td>Current Class</td>

					<td><?php echo $categorydata["opt1"]?> </td>

				</tr>

				<tr>

					<td>Medium</td>

					<td><?php echo $categorydata["medium"]?> </td>

				</tr>

				<tr>

					<td>Category</td>

					<td><?php echo $categorydata["category"]?> </td>

				</tr>

				<tr>

					<td>School Name</td>

					<td><?php echo $categorydata["school_name"]?> </td>

				</tr>

				<tr>

					<td>Board</td>

					<td><?php echo $categorydata["board"]?> </td>

				</tr>

				<!-- <tr>

					<td>Photo</td>

					<td>
						

					<a href="<?php echo (!empty($categorydata['photo'])?  'https://www.admissionform.driitian.com/'.'uploads/'.$categorydata['photo']:DEFULT_USER_IMG); ?>" target = "_blank" class="image-link"><img src="<?php echo (!empty($categorydata['photo'])? 'https://www.admissionform.driitian.com/'.'uploads/'.$categorydata['photo']:DEFULT_USER_IMG); ?>" class="user_image" style="height: 50px;"></a>	

					
					</td>
				</tr> -->

				<tr>

					<td>Current Address</td>

					<td><?php echo $categorydata["current_address"]?></td>

				</tr>

				<tr>

					<td>Permanent Address</td>

					<td><?php echo $categorydata["perma_address"]?></td>

				</tr>

				<tr>

					<td>City</td>

					<td><?php echo $categorydata["city"]?></td>

				</tr>

				<tr>

					<td>District</td>

					<td><?php echo $categorydata["district"]?></td>

				</tr>

				<tr>

					<td>State</td>

					<td><?php echo $categorydata["state"]?></td>

				</tr>

			</table>

		</div>		

		<?php

        

        

        ?>

	</div>

</div>		