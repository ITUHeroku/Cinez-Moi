<?php
	require_once('ModelParent.php');
	class Film_Data
	{
		private $_idFilm;
		private $_titre;
		private $_introduction;
		private $_dateSortie;
		private $_realisateur;
		private $_image;
		private $_extrait;
		private $_idCategorie;
		private $_note;
		private $_evenement;

		/**
		 * Film_Data constructor.
		 * @param $_idFilm
		 * @param $_titre
		 * @param $_introduction
		 * @param $_dateSortie
		 * @param $_realisateur
		 * @param $_image
		 * @param $_extrait
		 * @param $_idCategorie
		 * @param $_note
		 * @param $_evenement
		 */
		public function __construct($_idFilm, $_titre, $_introduction, $_dateSortie, $_realisateur, $_image, $_extrait, $_idCategorie, $_note, $_evenement)
		{
			$this->_idFilm = $_idFilm;
			$this->_titre = $_titre;
			$this->_introduction = $_introduction;
			$this->_dateSortie = $_dateSortie;
			$this->_realisateur = $_realisateur;
			$this->_image = $_image;
			$this->_extrait = $_extrait;
			$this->_idCategorie = $_idCategorie;
			$this->_note = $_note;
			$this->_evenement = $_evenement;
		}

		/**
		 * @return mixed
		 */
		public function getIdFilm()
		{
			return $this->_idFilm;
		}

		/**
		 * @param mixed $idFilm
		 */
		public function setIdFilm($idFilm)
		{
			$this->_idFilm = $idFilm;
		}

		/**
		 * @return mixed
		 */
		public function getTitre()
		{
			return $this->_titre;
		}

		/**
		 * @param mixed $titre
		 */
		public function setTitre($titre)
		{
			$this->_titre = $titre;
		}

		/**
		 * @return mixed
		 */
		public function getIntroduction()
		{
			return $this->_introduction;
		}

		/**
		 * @param mixed $introduction
		 */
		public function setIntroduction($introduction)
		{
			$this->_introduction = $introduction;
		}

		/**
		 * @return mixed
		 */
		public function getDateSortie()
		{
			return $this->_dateSortie;
		}

		/**
		 * @param mixed $dateSortie
		 */
		public function setDateSortie($dateSortie)
		{
			$this->_dateSortie = $dateSortie;
		}

		/**
		 * @return mixed
		 */
		public function getRealisateur()
		{
			return $this->_realisateur;
		}

		/**
		 * @param mixed $realisateur
		 */
		public function setRealisateur($realisateur)
		{
			$this->_realisateur = $realisateur;
		}

		/**
		 * @return mixed
		 */
		public function getImage()
		{
			return $this->_image;
		}

		/**
		 * @param mixed $image
		 */
		public function setImage($image)
		{
			$this->_image = $image;
		}

		/**
		 * @return mixed
		 */
		public function getExtrait()
		{
			return $this->_extrait;
		}

		/**
		 * @param mixed $extrait
		 */
		public function setExtrait($extrait)
		{
			$this->_extrait = $extrait;
		}

		/**
		 * @return mixed
		 */
		public function getIdCategorie()
		{
			return $this->_idCategorie;
		}

		/**
		 * @param mixed $idCategorie
		 */
		public function setIdCategorie($idCategorie)
		{
			$this->_idCategorie = $idCategorie;
		}

		/**
		 * @return mixed
		 */
		public function getNote()
		{
			return $this->_note;
		}

		/**
		 * @param mixed $note
		 */
		public function setNote($note)
		{
			$this->_note = $note;
		}

		/**
		 * @return mixed
		 */
		public function getEvenement()
		{
			return $this->_evenement;
		}

		/**
		 * @param mixed $evenement
		 */
		public function setEvenement($evenement)
		{
			$this->_evenement = $evenement;
		}


	}

	class Film extends modelParent
	{
		private $table = "Film";

		public function __construct()
		{
			parent::__construct();
			$this->setTable($this->table);
		}

		public function dataToServices($table, $isUnique = false)
		{
			if ($isUnique) {
				$query = $table;
				$query->_idfilm = $this->dataNotNull($query->_idfilm);
				$query->titre = $this->dataNotNull($query->titre);
				$query->introduction = $this->dataNotNull($query->introduction);
				$query->datesortie = $this->dataNotNull($query->datesortie);
				$query->realisateur = $this->dataNotNull($query->realisateur);
				$query->image = $this->dataNotNull($query->image);
				$query->extrait = $this->dataNotNull($query->extrait);
				$query->_idcategorie = $this->dataNotNull($query->_idcategorie);
				$query->note = $this->dataNotNull($query->note);
				$query->evenement = $this->dataNotNull($query->evenement);
			}
			else{
				foreach($table as $query){
					$query->_idfilm = $this->dataNotNull($query->_idfilm);
					$query->titre = $this->dataNotNull($query->titre);
					$query->introduction = $this->dataNotNull($query->introduction);
					$query->datesortie = $this->dataNotNull($query->datesortie);
					$query->realisateur = $this->dataNotNull($query->realisateur);
					$query->image = $this->dataNotNull($query->image);
					$query->extrait = $this->dataNotNull($query->extrait);
					$query->_idcategorie = $this->dataNotNull($query->_idcategorie);
					$query->note = $this->dataNotNull($query->note);
					$query->evenement = $this->dataNotNull($query->evenement);
				}
			}
			return $table;
		}

		public function servicesToObject($query,$isUnique=false){
			if($isUnique && $query!=null){
				$row=$query;
				return new Film_Data($row->_idfilm,$row->titre,$row->introduction,$row->datesortie,$row->realisateur,$row->image,$row->extrait,$row->_idcategorie, $row->note,$row->evenement);
			}
			$result = array();

			foreach($query as $row){
				$result[]= new Film_Data($row->_idfilm,$row->titre,$row->introduction,$row->datesortie,$row->realisateur,$row->image,$row->extrait,$row->_idcategorie, $row->note,$row->evenement);
			}

			return $result;
		}

		public function getFilmAll($nombre="",$categorie=""){
			//Prendre tous les films
			$query = $this->getFilmAllServices($nombre,$categorie);
			return $this->servicesToObject($query);
		}

		public function getFilmAllServices($nombre="",$categorie=""){
			if($nombre!=null)
				$this->cimongo->limit("$nombre");
			if($categorie!=null){
				$temp	=	"".$categorie;
				$this->cimongo->where(array('_idCategorie' => $temp));
			}
			$query	=	$this->cimongo->get($this->table);
			$query	=	$query->result();
			return $this->dataToServices($query);
		}

		public function getFilm($idFilm="1"){
			//Prendre un seul film
			$query	= $this->getFilmServices($idFilm);
			return $this->servicesToObject($query,true);
		}

		public function getFilmServices($idFilm=""){
			$this->cimongo->where(array('_idFilm'=>$idFilm));
			$query 	= $this->cimongo->get($this->table);
			$query 	= $query->result();
			return $this->dataToServices($query[0],true);
		}

		public function getFilmRecentServices($nombre="",$categorie=""){
			//Prendre tous les films récents
			if($nombre!=null)
				$this->cimongo->limit("$nombre");
			if($categorie!=null){
				$temp	=	"".$categorie;
				$this->cimongo->where(array('_idCategorie' => $temp));
			}
			$this->cimongo->order_by(array('dateSortie'=>'ASC'));
			$query	=	$this->cimongo->get($this->table);
			$query	=	$query->result();
			return $this->dataToServices($query);
		}

		public function getFilmRecent($nombre="",$categorie=""){
			$query	= $this->getFilmRecentServices($nombre,$categorie);
			return $this->servicesToObject($query);
		}

		public function getFilmRecentSameCategorieServices($nombre="",$idFilm=""){
			//Prendre les films de la même catégorie qu'un film donné
			$film = $this->getFilm($idFilm);
			$categorie=$film->getIdCategorie();
			return $this->getFilmRecentServices($nombre,$categorie);
		}

		public function getFilmRecentSameCategorie($nombre="",$idFilm=""){
			$query	=	$this->getFilmRecentSameCategorieServices($nombre,$idFilm);
			return $this->servicesToObject($query);
		}

		public function getFilmByTitleServices($nombre="",$categorie="",$title=""){
			//Rechercher un film par son titre
			if($nombre!=null)
				$this->cimongo->limit("$nombre");
			if($categorie!=null){
				$temp		=	"".$categorie;
				$this->cimongo->where(array('_idCategorie' => $temp));
			}
			$this->cimongo->like('titre',$title,"i",true,true);
			$query	=	$this	->cimongo->get($this->table);
			$query	=	$query	->result();
			return $this->dataToServices($query);
		}

		public function getFilmByTitle($nombre="",$categorie="",$title){
			$query = $this->getFilmByTitleServices($nombre,$categorie,$title);
			return $this->servicesToObject($query);
		}

		public function getFilmPopulaireServices($nombre="",$categorie=""){
			$filmRows 	=	$this->getFilmAllServices(null,$categorie);
			usort($filmRows,"Film::comparerServices");
			$result=array();

			//Limit
			if($nombre!=null){
				for($i=0;$i<$nombre;$i++){
					$result[$i]=$filmRows[$i];
				}
			}
			else $result=$filmRows;
			return $this->dataToServices($result,false);
		}

		public function getFilmPopulaire($nombre="",$categorie=""){
			$filmRows 	=	$this->getFilmAll(null,$categorie);
			usort($filmRows,"Film::comparer");
			$result=array();

			//Limit
			if($nombre!=null){
				for($i=0;$i<$nombre;$i++){
					$result[$i]=$filmRows[$i];
				}
			}
			else $result=$filmRows;
			return $result;
		}


		public function comparer($a,$b){
			return $this->countFollow($a->getIdFilm())<$this->countFollow($b->getIdFilm());
		}

		public function comparerServices($a,$b){
			return $this->countFollow($a->_idfilm)<$this->countFollow($b->_idfilm);
		}

		private function countFollow($idFilm){
			$compteur	=	0;
			$this->load->model('membre');
			$membreRows =$this->membre->getMembreAll();
			foreach($membreRows as $membreRow){
				$temp = $membreRow->getFollow();
				foreach($temp as $row)
					if($idFilm==$row)
						$compteur++;
			}
			return $compteur;
		}

		/*public function getFilmCurrentMonth(){
			//Prendre tous les films sortants ce mois-ci
			$query	=	$this->cimongo->get($this->table);
			$query	=	$query->result();
		}*/

		public function getFilmMembreFollow($idMembre){
			$this->load->model('membre');
			$membre = $this->membre->getMembre($idMembre);
			$result = array();
			$follow = $membre->getFollow();
			if($follow==null	|| empty($follow))
				return array();
			foreach($follow as $row)
				$result = $this->add($result,$row);
			return $result;
		}

		public function getFilmMembreFollowServices($idMembre=""){
			$this->load->model('membre');
			$membre = $this->membre->getMembre($idMembre);
			$result = array();
			$follow = $this->membre->getMembreServices($idMembre)->follow;
			if($follow==null	|| empty($follow))
				return array();
			foreach($follow as $row)
				$result = $this->addServices($result,$row);
			return $this->dataToServices($result);
		}

		private function add($table=array(),$value){
			foreach($table as $row)
				if($row->getIdFilm()==$value)
					return $table;
			array_push($table,$this->getFilm($value));
			return $table;
		}

		private function addServices($table=array(),$value){
			foreach($table as $row)
				if($row->_idfilm==$value)
					return $table;
			array_push($table,$this->getFilmServices($value));
			return $table;
		}

		public function filterByThisMonthServices($rows=array()){
			$result=array();
			foreach($rows as $row){
				$dateSortie=$row->datesortie;
				$dateSortie=$this->mongoDateToDateTime($dateSortie);
				if($dateSortie!=null)
					if($this->isThisMonth($dateSortie))
						$result[]=$row;
			}
			return $result;
		}

		public function filmThisMonthServices($nombre="",$categorie=""){
			$rows = $this->getFilmAllServices($nombre,$categorie);
			return $this->filterByThisMonthServices($rows);
		}

		public function filmThisMonth($nombre="",$categorie=""){
			$query = $this->filmThisMonthServices($nombre,$categorie);
			return $this->servicesToObject($query,false);
		}

	}
