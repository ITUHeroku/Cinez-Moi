<?php
	require_once('ModelParent.php');

	class EvenementMembre_Data{
		private $_idFilm;
		private $_labelEvenement;
		private $_dateEvenement;
		private $_salle;
		private $_listeMembre;

		/**
		 * EvenementMembre_Data constructor.
		 * @param $_idFilm
		 * @param $_labelEvenement
		 * @param $_dateEvenement
		 * @param $_salle
		 * @param $_listeMembre
		 */
		public function __construct($_idFilm, $_labelEvenement, $_dateEvenement, $_salle, $_listeMembre)
		{
			$this->_idFilm = $_idFilm;
			$this->_labelEvenement = $_labelEvenement;
			$this->_dateEvenement = $_dateEvenement;
			$this->_salle = $_salle;
			$this->_listeMembre = $_listeMembre;
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
		public function getLabelEvenement()
		{
			return $this->_labelEvenement;
		}

		/**
		 * @param mixed $labelEvenement
		 */
		public function setLabelEvenement($labelEvenement)
		{
			$this->_labelEvenement = $labelEvenement;
		}

		/**
		 * @return mixed
		 */
		public function getDateEvenement()
		{
			return $this->_dateEvenement;
		}

		/**
		 * @param mixed $dateEvenement
		 */
		public function setDateEvenement($dateEvenement)
		{
			$this->_dateEvenement = $dateEvenement;
		}

		/**
		 * @return mixed
		 */
		public function getSalle()
		{
			return $this->_salle;
		}

		/**
		 * @param mixed $salle
		 */
		public function setSalle($salle)
		{
			$this->_salle = $salle;
		}

		/**
		 * @return mixed
		 */
		public function getListeMembre()
		{
			return $this->_listeMembre;
		}

		/**
		 * @param mixed $listeMembre
		 */
		public function setListeMembre($listeMembre)
		{
			$this->_listeMembre = $listeMembre;
		}

	}

	class Membre_Data{
		private $_idMembre;
		private $_nom;
		private $_prenom;
		private $_login;
		private $_password;
		private $_sexe;
		private $_mail;
		private $_suggest;
		private $_follow;
		private $_notification;
		private $_evenement;

		/**
		 * Membre_Data constructor.
		 * @param $_idMembre
		 * @param $_nom
		 * @param $_prenom
		 * @param $_login
		 * @param $_password
		 * @param $_sexe
		 * @param $_mail
		 * @param $_suggest
		 * @param $_follow
		 * @param $_notification
		 * @param $_evenement
		 */
		public function __construct($_idMembre, $_nom, $_prenom, $_login, $_password, $_sexe, $_mail, $_suggest, $_follow, $_notification, $_evenement)
		{
			$this->_idMembre = $_idMembre;
			$this->_nom = $_nom;
			$this->_prenom = $_prenom;
			$this->_login = $_login;
			$this->_password = $_password;
			$this->_sexe = $_sexe;
			$this->_mail = $_mail;
			$this->_suggest = $_suggest;
			$this->_follow = $_follow;
			$this->_notification = $_notification;
			$this->_evenement = $_evenement;
		}

		/**
		 * @return mixed
		 */
		public function getIdMembre()
		{
			return $this->_idMembre;
		}

		/**
		 * @param mixed $idMembre
		 */
		public function setIdMembre($idMembre)
		{
			$this->_idMembre = $idMembre;
		}

		/**
		 * @return mixed
		 */
		public function getNom()
		{
			return $this->_nom;
		}

		/**
		 * @param mixed $nom
		 */
		public function setNom($nom)
		{
			$this->_nom = $nom;
		}

		/**
		 * @return mixed
		 */
		public function getPrenom()
		{
			return $this->_prenom;
		}

		/**
		 * @param mixed $prenom
		 */
		public function setPrenom($prenom)
		{
			$this->_prenom = $prenom;
		}

		/**
		 * @return mixed
		 */
		public function getLogin()
		{
			return $this->_login;
		}

		/**
		 * @param mixed $login
		 */
		public function setLogin($login)
		{
			$this->_login = $login;
		}

		/**
		 * @return mixed
		 */
		public function getPassword()
		{
			return $this->_password;
		}

		/**
		 * @param mixed $password
		 */
		public function setPassword($password)
		{
			$this->_password = $password;
		}

		/**
		 * @return mixed
		 */
		public function getSexe()
		{
			return $this->_sexe;
		}

		/**
		 * @param mixed $sexe
		 */
		public function setSexe($sexe)
		{
			$this->_sexe = $sexe;
		}

		/**
		 * @return mixed
		 */
		public function getMail()
		{
			return $this->_mail;
		}

		/**
		 * @param mixed $mail
		 */
		public function setMail($mail)
		{
			$this->_mail = $mail;
		}

		/**
		 * @return mixed
		 */
		public function getSuggest()
		{
			return $this->_suggest;
		}

		/**
		 * @param mixed $suggest
		 */
		public function setSuggest($suggest)
		{
			$this->_suggest = $suggest;
		}

		/**
		 * @return mixed
		 */
		public function getFollow()
		{
			return $this->_follow;
		}

		/**
		 * @param mixed $follow
		 */
		public function setFollow($follow)
		{
			$this->_follow = $follow;
		}

		/**
		 * @return mixed
		 */
		public function getNotification()
		{
			return $this->_notification;
		}

		/**
		 * @param mixed $notification
		 */
		public function setNotification($notification)
		{
			$this->_notification = $notification;
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
		public function setEvenement($evenement){
				$this->_evenement = $evenement;
			}

	}

	class Membre extends modelParent{
		private $table = "Membre";
		private $passwordPrefix = "PASS";
		private $passwordSuffix = "4739";

		public function __construct()
		{
			parent::__construct();
			$this->setTable($this->table);
		}

		private function __password($password)
		{
			$result = sha1(md5($this->passwordPrefix . $password . $this->passwordSuffix));
			return $result;
		}

		public function servicesToObject($query,$isUnique=false){
			if($isUnique){
				$row = $query;
				return new Membre_Data($row->_idmembre,$row->nom,$row->prenom,$row->login,$row->password,$row->sexe,$row->mail,$row->suggest,$row->follow,$row->notification,$row->evenement);
			}
			$result = array();
			foreach($query as $row)
				$result[] = new Membre_Data($row->_idmembre,$row->nom,$row->prenom,$row->login,$row->password,$row->sexe,$row->mail,$row->suggest,$row->follow,$row->notification,$row->evenement);
			return $result;
		}

		public function servicesToEvenementMembre($query,$isUnique=false){

			if($isUnique){
				$row = $query;
				return new EvenementMembre_Data($row['idFilm'],$row['labelEvenement'],$row['dateEvenement'],$row['salle'],$row['listeMembre']);
			}
			$result = array();
			foreach($query as $row){
				$result[] = new EvenementMembre_Data($row['idFilm'],$row['labelEvenement'],$row['dateEvenement'],$row['salle'],$row['listeMembre']);
			}

			return $result;
		}

		public function getMembreServices($idMembre="Memb-1"){
			$this->cimongo->where(array('_idMembre'=>$idMembre));
			$query = $this->cimongo->get($this->table);
			$query = $query->result();

			return $query[0];
		}

		public function getMembre($idMembre){
			$query = $this->getMembreServices($idMembre);
			return $this->servicesToObject($query,true);
		}

		public function getMembreAllServices($nombre=""){
			//Prendre tous les membres
			if($nombre!=null)
				$this->cimongo->limit("$nombre");
			$query	=	$this->cimongo->get($this->table);
			$query	=	$query->result();;
			return $query;
		}

		public function getMembreAll($nombre=""){
			$query	=	$this->getMembreAllServices($nombre);
			return $this->servicesToObject($query);
		}

		public function signin($login,$password){
			//Vérifier connexion
			//echo $this->__password("mdpkanto");
			$this->cimongo->where(
					array(
							'login'=>$login,
							'password'=>$this->__password($password)
					));
			$query	=	$this->cimongo->count_all_results($this->table);
			if($query==0){
				return false;
			}
			return true;
		}

		public function signinServices($login,$password){
			$result=null;
			$result['valid']=false;
			$result['valid']=$this->signin($login,$password);

			if($result['valid']){
				$this->cimongo->where(array('login'=>$login,'password'=>$this->__password($password)));
				$query	=	$this->cimongo->get($this->table);
				$query 	=	$query->result();
				$result['membre']	=	$query;
			}
			return $result;
		}

		private function __signupData($membre){
			$query = array(
					'_idMembre'	=>$membre->getIdMembre(),
					'nom'		=>$membre->getNom(),
					'prenom'	=>$membre->getPrenom(),
					'login'		=>$membre->getLogin(),
					'password'	=>$this->__password($membre->getPassword()),
					'sexe'		=>$membre->getSexe(),
					'mail'		=>$membre->getMail(),
			);
			$this->cimongo->insert($this->table,$query);
		}

		public function signup($nom="Nom",$prenom="Prenom",$login="",$password="",$sexe="M",$mail="mail@xyz.com"){
			//Inscription Membre
			$id			=	$this->cimongo->count_all_results($this->table)+1;
			$idMembre	=	"Memb-".$id;
			$login		=	$login		!=null?$login			:"login-".$id;
			$password	=	$password	!=null?$password		:"password-".$id;
			$empty	=	array();
			$membre = new Membre_Data($idMembre,$nom,$prenom,$login,$password,$sexe,$mail,$empty,$empty,$empty,$empty);
			return $this->__signupData($membre);
		}

		private function __updateMembreData($membre){
			$query	= array(
					'nom'			=>$membre->getNom(),
					'prenom'		=>$membre->getPrenom(),
					'login'			=>$membre->getLogin(),
					'password'		=>$this->__password($membre->getPassword()),
					'sexe'			=>$membre->getSexe(),
					'mail'			=>$membre->getMail(),
					'suggest'		=>$membre->getSuggest(),
					'follow'		=>$membre->getFollow(),
					'notification'	=>$membre->getNotification(),
					'evenement'		=>$membre->getEvenement()
			);
			$this->cimongo->where(array('_idMembre'=>$membre->getIdMembre()))->set($query)->update($this->table);
		}

		public function updateMembre($idMembre,$nom="",$prenom="",$login="",$password="",$sexe="",$mail="",$suggest=array(),$follow=array(),$notification=array(),$evenement=array()){
			$membre = $this->getMembre($idMembre);
			$nom			=$nom			!=null?	$nom			:$membre->getNom();
			$prenom			=$prenom		!=null?	$prenom			:$membre->getPrenom();
			$login 			=$login 		!=null? $login			:$membre->getLogin();
			$password 		=$password 		!=null? $password		:$membre->getPassword();
			$sexe			=$sexe 			!=null? $sexe			:$membre->getSexe();
			$mail 			=$mail 			!=null? $mail			:$membre->getMail();
			$suggest 		=$suggest 		!=null? $suggest		:$membre->getSuggest();
			$follow 		=$follow 		!=null? $follow			:$membre->getFollow();
			$notification 	=$notification 	!=null? $notification	:$membre->getNotification();
			$evenement 		=$evenement 	!=null? $evenement		:$membre->getEvenement();
			$membreData	= new Membre_Data($idMembre,$nom,$prenom,$login,$password,$sexe,$mail,$suggest,$follow,$notification,$evenement);
			return $this->__updateMembreData($membreData);
		}

		public function add($table=array(),$value){
			foreach($table as $row)
				if($value==$row)
					return $table;
			array_push($table,$value);
			return $table;
		}

		public function followFilm($idMembre,$idFilm){
			$membre = $this->getMembre($idMembre);
			$follow = $membre->getFollow();
			$follow = $this->add($follow,$idFilm);
			$this->updateMembre($idMembre,null,null,null,null,null,null,null,$follow,null,null);
		}

		public function ajouterEvenementData($idMembre,$newEvenement,$newNotification){
			//****************newEvenement est ici supposé contenir les dernièresinformations nécéssaires pour executer (Ex: Liste des participants à l'évènement)
			$membre 	= $this->getMembreServices($idMembre);
			$evenement 	= $membre->evenement;
			$evenement  = $this->add($evenement,$newEvenement);
			$notification = $membre->notification;
			$notification = $this->add($notification,$newNotification);
			$this->updateMembre($idMembre,null,null,null,null,null,null,null,null,$notification,$evenement);
		}

		public function noteSuggestion($idMembre,$idCategorie,$note){
			$membre		= $this->getMembre($idMembre);
			$suggest 	= $membre->getSuggest();
			$suggest	= $this->set($suggest,$idCategorie,$note);
			return $suggest;
		}

		public function set($table=array(),$value,$note){
			for($i=0;$i<count($table);$i++){
				if($table[$i]['_idCategorie']==$value){
					$table[$i]['note']=$note;
					return $table;
				}
			}
			$temp['_idCategorie']=$value;
			$temp['note']=$note;
			array_push($table,$temp);
			return $table;
		}

		private function updateSuggestData($idMembre,$suggest){
			$this->updateMembre($idMembre,null,null,null,null,null,null,$suggest,null,null,null);
		}

		public function updateSuggest($idMembre,$idCategorie,$note){
			return $this->updateSuggestData($idMembre,$this->noteSuggestion($idMembre,$idCategorie,$note));
		}

		public function getEvenementMembreAll($idMembre=""){
			$query = $this->getEvenementMembreAllServices($idMembre);
			$result = $this->servicesToEvenementMembre($query,false);
			return $result;
		}

		public function getEvenementMembreAllServices($idMembre=""){
			$membre = $this-> getMembreServices($idMembre);
			$evenement = $membre->evenement;
			return $evenement;
		}

		public function getEvenementMembreTodayAllServices($idMembre=""){
			$evenement	 = $this->getEvenementMembreAllServices($idMembre);
			$currentDate = new DateTime("now");
			$result = array();

			foreach($evenement as $row){
				$dateEvenement = $row['dateEvenement'];

				if($dateEvenement!=null){
					if($this->isToday($this->mongoDateToDateTime($dateEvenement))){
						$result[] = $row;
					}
				}
			}
			return $result;
		}


	}

