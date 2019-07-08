<?php
include '../../model/Conteudo.php';

class pdvsControl{
	function insert($tradingName,$ownerName,$document,$coverageArea,$address){
		$pdv = new pdvs();
		return $pdv->insert($tradingName,$ownerName,$document,$coverageArea,$address);
	}

	function update($obj,$id){
		$pdv = new pdvs();
		return $pdv->update($obj,$id);
	}

	function delete($id){
		$pdv = new pdvs();
		return $pdv->delete($id);
	}

	function find($id){
		$pdv = new pdvs();
		return $pdv->find($id);
	}

	function findAll(){
		$pdv = new pdvs();
		return $pdv->findAll();
	}
}

?>