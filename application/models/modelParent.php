
<?php

	class ModelParent extends CI_Model{
		private $table="";
		
		public function __construct() {
			parent::__construct();
		}
		
		public function getAll(){
			$query 	= 	$this->cimongo->get($this->table);   	
			$query	=	$query->result();
			return $query;
		}
		
		public function setTable($nomTable){
			$this->table	=	$nomTable;
		}
		
		public function insert($attr=array()){
			$this->cimongo->insert($this->table,$attr);
		}			
		
		//modifie une seule document
		public function update($data=array()){
			$this->cimongo->update($this->table,$data);
		}

		public function dataNotNull($data){
			$result	= $data==null?array():$data;
			return $result;
		}

		public function mongoDateToDateTime($date){
			//FIXME: La date depuis la base ne correspond pas à la date insérée après conversion
			$date	=	new MongoDate($date->sec,$date->usec);
			$date 	= 	new DateTime(date('Y-m-d h:i:s',$date->sec));
			return $date;
		}

		public function compareDate($beforeDate,$afterDate){
			return $beforeDate<$afterDate;
		}

		public function isSameDate($beforeDate,$afterDate){
			$date1=new DateTime($beforeDate->format('Y-m-d'));
			$date2=new DateTime($afterDate->format('Y-m-d'));
			return $date1==$date2;
		}

		public function isToday($date){
			$currentDate = new DateTime("now");
			return $this->isSameDate($currentDate,$date);
		}

		public function isSameMonth($beforeDate,$afterDate){
			$date1=new DateTime($beforeDate->format('Y-m'));
			$date2=new DateTime($afterDate->format('Y-m'));
			return true;
		}

		public function isThisMonth($date){
			$currentDate = new DateTime("now");
			//return $this->isSameMonth($currentDate,$date);
			return $this->compareDate($currentDate,$date);
		}
	}