<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="public/css/style.css" type="text/css">
	
</head>
<body>
<table>
	<h1>Hospital</h1>

	<thead>
	<h3>Patients</h3>
	<h4><a href="/Client/clients">To Clients</h4>
			<tr>
				<th>Name</th>
				<th>Status</th>
				<th>Description</th>
				<th>Clientname</th>
				<th>Action</th>

				</tr>

				<!-- <?php 

					echo "<pre>";
					print_r($getall);
					echo "</pre>";

				 ?> -->

				<?php foreach($getall as $getone) { ?>
					<tr>
						<td><?= $getone["patient_name"]; ?></td>
						<td><?= $getone["patient_status"]; ?></td>
						<td><?= $getone["species_description"]; ?></td> 
						<td><?= $getone["client_firstname"]; ?></td> 
					</tr>
				<?php } ?>
		</thead>		
		</tbody>
				<tr>
					
			</tr>
		</tbody>
	</table>
	</body>
</html>