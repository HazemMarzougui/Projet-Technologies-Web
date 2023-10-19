<?php
	class Produit{
		private $idProduit=null;
		private $NomP=null;
		private $prix=null;
		private $quantite=null;
		private $img=null;
		private $descriptionn=null;
		private $NomC=null;

		
		function __construct($NomP,$prix,$quantite, $img,$descriptionn,$NomC){
			$this->NomP=$NomP;
			$this->prix=$prix;
			$this->quantite=$quantite;
			$this->img=$img;
			$this->descriptionn=$descriptionn;
			$this->NomC=$NomC;
		}
		function getidProduit(){
			return $this->idProduit;
		}
		function getNomP(){
			return $this->NomP;
		}
		function getprix(){
			return $this->prix;
		}
		function getquantite(){
			return $this->quantite;
		}
		function getimg(){
			return $this->img;
		}
		function getdesc(){
			return $this->descriptionn;
		}
		function getNomC(){
			return $this->NomC;
		}
		function setNomP(string $NomP){
			$this->NomP=$NomP;
		}
		function setprix(int $prix){
			$this->prix=$prix;
		}
		function setquantite(int $quantite){
			$this->quantite=$quantite;
		}
		function setimg(string $img){
			$this->img=$img;
		}
		function setdesc(string $descriptionn){
			$this->descriptionn=$descriptionn;
		}
		function setNomC(string $NomC){
			$this->NomC=$NomC;
		}
	}

	
	
?>