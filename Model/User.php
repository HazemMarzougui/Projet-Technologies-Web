<?php
	class User{
		private $idU=null;
		private $nom=null;
		private $prenom=null;
		private $adresse=null;
		private $email=null;
		private $dob=null;
		private $passworduser=null;
		private $NomR=null;

		
		function __construct($nom,$prenom,$adresse,$email,$dob,$passworduser,$NomR){
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
			$this->email=$email;
			$this->dob=$dob;
			$this->passworduser=$passworduser;
			$this->NomR=$NomR;
		}
		function getiduser(){
			return $this->idU;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getadresse(){
			return $this->adresse;
		}
		function getemail(){
			return $this->email;
		}
		function getdob(){
			return $this->dob;
		}
		function getpassworduser(){
			return $this->passworduser;
		}
		function getNomR(){
			return $this->NomR;
		}

		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function setdob(date $dob){
			$this->dob=$dob;
		}
		function setpassworduser(passwrod $passworduser){
			$this->passworduser=$passworduser;
		}
		function setNomR(string $NomR){
			$this->NomR=$NomR;
		}
	}
	
?>