<?php
include '../../control/ConteudoControl.php';
$pdvsControl = new pdvsControl();

$id = $_GET["id"];

header('Content-Type: application/json');
foreach($pdvsControl->find($id) as $valor){
	echo "pdvs:[";
	echo json_encode($valor);
	echo "]";
}


?>