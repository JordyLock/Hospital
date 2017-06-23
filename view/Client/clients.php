
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="../public/css/style.css" type="text/css">
	
</head>
<body>
<table>
	<h1>Hospital</h1>

	<thead>
	<h3>Clients</h3>
	<h4><a href="/Client">To Patients</h4>
			<tr>
				<th>Firstname</th>
				<th>LastName</th>
				<th>Phone</th>
				<th>E-Mail</th>
				<th>Action</th>

				</tr>

				 <!-- <?php 

					echo "<pre>";
					print_r($clients);
					echo "</pre>";

				 ?>  -->


				<?php foreach($clients as $client) { ?>
					<tr>
						<td><?= $client["client_firstname"]; ?></td>
						<td><?= $client["client_lastname"]; ?></td>
						<td><?= $client["client_phone"]; ?></td> 
						<td><?= $client["client_email"]; ?></td>
						<td></td> 
 
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

</body>
</html>