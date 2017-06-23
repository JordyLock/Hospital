<?php

function getClients() 
{
		$db = openDatabaseConnection();
		
		$sql = "SELECT * FROM clients";
		$query = $db->prepare($sql);
		$query->execute();

		return $query->fetchAll(); 

}
function getPatients() 
{
		$db = openDatabaseConnection();
		
		$sql = "SELECT * FROM patients LEFT JOIN clients ON patients.client_id = clients.client_id LEFT JOIN species ON patients.species_id = species.species_id";
		$query = $db->prepare($sql);
		$query->execute();

		return $query->fetchAll(); 

}

Function getPatientsFromClients($client_id){ 
	$db = openDatabaseConnection();
	$query = $db->prepare("SELECT * FROM hospital WHERE client_id = :client_id");  
	$query->bindParam(":client_id", $client_id);

	$query->execute();

	return $query->fetchAll();


}









?>