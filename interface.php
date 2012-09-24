<?php
	require_once('coordinates.php');
	if(isset($_POST['command']){
		processRequest($_POST);
	}else if(isset($_GET['command'])){
		processRequest($_GET);
	}
	else{
	echo 'improper command';
	}
	function processRequest($arr){
	switch($arr['command']){
		case 'getTestCoordinates':
			$coordSet = getTestCoordinates();
			echo json_encode($coordSet);
			break;
		}
	
	
	}

?>