<?php
include '../../control/ConteudoControl.php';
$pdvsControl = new pdvsControl();

header('Content-Type: application/json');

foreach($pdvsControl->findAll() as $valor){
	echo json_encode($valor);
}


?>