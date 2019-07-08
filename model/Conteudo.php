<?php
include '../../conexao/Conexao.php';

class pdvs extends Conexao{
    private $id;
    private $tradingName;
    private $ownerName;
    private $document;
    private $coverageArea;
    private $address;

    function getid() {
        return $this->id;
    }

    function gettradingName() {
        return $this->tradingName;
    }

    function getownerName() {
        return $this->ownerName;
    }

    function getdocument() {
        return $this->document;
    }

    function getcoverageArea() {
        return $this->coverageArea;
    }

    function getaddress() {
        return $this->address;
    }

    function setid() {
        return $this->id;
    }

    function settradingName() {
        $this->tradingName;
    }

    function setownerName() {
        $this->ownerName;
    }

    function setdocument() {
        $this->document;
    }

    function setcoverageArea() {
        $this->coverageArea;
    }

    function setaddress() {
        $this->address;
    }

    public function insert($tradingName,$ownerName,$document,$coverageArea,$address){
    	$sql = "INSERT INTO pdv_cadastro (tradingName,ownerName,document,coverageArea,address) VALUES (:tradingName,:ownerName,:document,:coverageArea,:address)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('tradingName',  $tradingName);
        $consulta->bindValue('ownerName', $ownerName);
        $consulta->bindValue('document' , $document);
        $consulta->bindValue('coverageArea' , $coverageArea);
        $consulta->bindValue('address' , $address);
    	return $consulta->execute();

	}

	public function delete($id){
		$sql =  "DELETE FROM pdv_cadastro WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->fetchAll();
	}

	public function find($id){
        $sql = "SELECT * FROM pdv_cadastro WHERE id=:id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT * FROM pdv_cadastro";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>