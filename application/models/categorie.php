<?php
	/*

	*/

		require_once('ModelParent.php');
		class Categorie_Data{
			private $_idCategorie;
			private $_nomCategorie;

			/**
			 * Categorie_Data constructor.
			 * @param $_idCategorie
			 * @param $_nomCategorie
			 */
			public function __construct($_idCategorie, $_nomCategorie)
			{
				$this->_idCategorie = $_idCategorie;
				$this->_nomCategorie = $_nomCategorie;
			}

			/**
			 * @return mixed
			 */
			public function getIdCategorie()
			{
				return $this->_idCategorie;
			}

			/**
			 * @return mixed
			 */
			public function getNomCategorie()
			{
				return $this->_nomCategorie;
			}

			/**
			 * @param mixed $idCategorie
			 */
			public function setIdCategorie($idCategorie)
			{
				$this->_idCategorie = $idCategorie;
			}

			/**
			 * @param mixed $nomCategorie
			 */
			public function setNomCategorie($nomCategorie)
			{
				$this->_nomCategorie = $nomCategorie;
			}


		}
		class Categorie extends modelParent{
			private $table="Categorie";
				public function __construct() {
                parent::__construct();
				$this->setTable($this->table);
			}

			public function servicesToObject($query,$isUnique=false){
				if($isUnique)
					return new Categorie_Data($query->_idcategorie,$query->nomcategorie);
				$result = array();
				foreach($query as $row)
					$result[] = new Categorie_Data($row->_idcategorie,$row->nomcategorie);
				return $result;
			}

			public function getCategorieAllServices(){
				//Prendre toutes les catégories d'un Film
				$res = $this->getAll();
				return $res;
			}

			public function getCategorieAll(){
				$query = $this->getCategorieAllServices();
				return $this->servicesToObject($query);
			}

			public function getCategorieServices($idCategorie="1"){
				//Prendre un seul film
				$this->cimongo->where(array('_idCategorie'=>$idCategorie));
				$query 	= $this->cimongo->get($this->table);
				$query 	= $query->result();
				return $query[0];
			}

			public function getCategorie($idCategorie=""){
				$query = $this->getCategorieServices($idCategorie);
				return $this->servicesToObject($query,true);
			}

			public function getCategorieMembreSuggest($idMembre){
				$this->load->model('membre');
				$membre = $this->membre->getMembre($idMembre);
				$result = array();
				$suggest = $membre->getSuggest();

				if($suggest==null || empty($suggest))
					return array();
				foreach($suggest as $row){
					$result = $this->add($result,$row['_idCategorie']);
				}

				return $result;
			}

			private function add($table=array(),$value){
				foreach($table as $row)
					if($row->getIdCategorie()==$value)
						return $table;
				array_push($table,$this->getCategorie($value));
				return $table;
			}


		}
