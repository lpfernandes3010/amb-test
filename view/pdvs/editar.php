<?php
include '../../control/ConteudoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;

if(!empty($data)){
 $pdvsControl = new pdvsControl();
 $pdvsControl->update($obj , $id);
 header('Location:listar.php');
}







?>