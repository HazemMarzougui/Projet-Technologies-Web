<?php
	class Role{
		private $idR=null;
		private $NomR=null;

		function __construct($NomR){
			$this->NomR=$NomR;

		}
		function getidR(){
			return $this->idR;
		}
		function getNomR(){
			return $this->NomR;
		}
		}

	
	
?>