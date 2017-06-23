<?php

Require(ROOT . "model/ClientModel.php");


function index()
{
	
	render('Client/index', array(
		'getall' => getPatients(),
		));

}
	function clients()
{
	
	render('Client/clients', array(
		'clients' => getClients(),
		));

}
