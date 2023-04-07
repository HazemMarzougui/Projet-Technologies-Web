<?php
    class livraison
    {
        private $reference;
        public $prix;
        public $nom;
		private $date;
		

    

        function __construct($ref, $prix, $nom, $date){
			$this->reference=$ref;
			$this->prix=$prix;
			$this->nom=$nom;
			$this->date=$date;
		}

        public function getref() 
        {
            return $this->reference ;
        }
        public function getnom()
        {
            return $this->nom;
        }
        public function getdate()
        {
            return $this->date;
        }
        

		/**
		 * Get the value of prix
		 */ 
		public function getPrix()
		{
				return $this->prix;
		}

		/**
		 * Set the value of prix
		 *
		 * @return  self
		 */ 
		public function setPrix($prix)
		{
				$this->prix = $prix;

				return $this;
		}
    }
    

?>