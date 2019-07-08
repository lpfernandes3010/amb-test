<?php
include '../../control/ConteudoControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$tradingName= $_GET["tradingName"];
$ownerName= $_GET["ownerName"];
$document= $_GET["document"];
$coverageArea= $_GET["coverageArea"];
$address= $_GET["address"];

if (empty($tradingName)) {
 echo 1;
   return false;
}

if (empty($ownerName)) {
 echo 2;
 return false;
}

if (empty($document)) {
 echo 3;
 return false;
}

if (empty($coverageArea)) {
 echo 4;
 return false;
}


if (empty($address)) {
 echo 5;
 return false;
}
echo $tradingName;
$conteudoControl = new pdvsControl();
 ///$conteudoControl->insert($obj);
 $conteudoControl->insert($tradingName,$ownerName,$document,$coverageArea,$address);
 header('Location:listarTudo.php');



?>