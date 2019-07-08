<?php
include '../../control/ConteudoControl.php';

$id= $_GET["id"];

 $pdvsControl = new pdvsControl();
 $res=$pdvsControl->delete($id);
 return true;

?>