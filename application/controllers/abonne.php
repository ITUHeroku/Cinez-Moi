<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Slash
 * Date: 28/06/2016
 * Time: 11:51
 */

 class Abonne extends CI_Controller{

     public function __construct(){
         parent::__construct();

     }

     public function sessionUser() {
         $login    = $this->input->post('login');
         $password = $this->input->post('password');
         if(isset($login)&& isset($password)){
             $this->load->model('membre');
             $data = $this->membre->signin($login,$password);
             if(!$data){
                 //redirect('visiteur/nonacces');
             }
             $membre = $this->membre->signinServices($login,$password);
             if($membre['valid']){
                 $membre = $membre['membre'][0]->_idmembre;
                 //$session_id=$this->session->userdata('session_id');
                 //$this->session->set_userdata(array('idmembre'=>'1'));
				 $this->home();
             }
			 else{
				$this->logout();
			 }
         }
     }

     public function logout() {
         //$this->session->sess_destroy();
         redirect('visiteur');
     }

     public function test(){
         //var_dump($this->session);
         var_dump($this->session->userdata('idmembre'));
     }

	 public function loadHeaderMembre(){
		 $this->load->view('avantMenu.php');
		 $this->load->view('headerMembre.php');
		 $this->load->view('apresMenuMembre.php');
		 $this->load->view('includeIndex.php');
	 }
	 public function loadHeaderMembreEnsemble(){
		 $this->load->view('avantMenu.php');
		 $this->load->view('headerMembre.php');
		 $this->load->view('apresMenuEnsembleMembre.php');
		 $this->load->view('includeIndex.php');
	 }
	 
     public function home(){
		 $this->loadHeaderMembre();
		 $this->load->view('home.php');
		 $this->load->view('includeHome.php');
		 $this->load->view('footer.php');
	 }
	 public function suggestions(){
		 $this->loadHeaderMembre();
		 //$this->load->view('ensemble.php');
		 $this->load->view('footer.php');
	 }
	 public function favoris(){
		 $this->loadHeaderMembre();
		 //$this->load->view('ensemble.php');
		 $this->load->view('footer.php');
	 }
	 public function profil(){
		 $this->loadHeaderMembre();
		 $this->load->view('profil.php');
		 $this->load->view('footer.php');
	 }
	 
	 public function catalogue(){
		 $this->loadHeaderMembre();
		 $this->load->model('film');
			 $data['listTop6FilmRecent']=$this->film->getFilmRecent(6,null);
			 $data['listTop6FilmPopulaire']=$this->film->getFilmPopulaire(6,null);
			 $data['listTop6Film']=$this->film->getFilmAll(6,null);
		 $this->load->view('catalogue.php',$data);
		 $this->load->view('footer.php');
	 }
	 public function details($id="1"){
		 $this->loadHeaderMembre();
		 $this->load->model('film');
			 $data['film']=$this->film->getFilm($id);
			 $data['listTop6FilmMemeCategorie']=$this->film->getFilmRecentSameCategorie(6,$id);
			 $this->load->view('details.php',$data);
		 $this->load->view('includeDetails.php');
		 $this->load->view('footer.php');
	 }
	 public function ensemble(){
		 $this->loadHeaderMembreEnsemble();
		 $this->load->model('categorie');
			 $data['listCategorie']=$this->categorie->getCategorieAll();
			 $this->load->model('film');
			 $data['listFilm']=$this->film->getFilmAll();
			 $this->load->view('ensemble.php',$data);
		 $this->load->view('includeEnsemble.php');
		 $this->load->view('footer.php');
	 }
	 public function index(){
		 $this->loadHeaderMembre();
		 $this->load->model('film');
			 $data['listTop12FilmRecent']=$this->film->getFilmRecent(12,null);
			 $this->load->model('categorie');
			 $data['listCategorie']=$this->categorie->getCategorieAll();
		 $this->load->view('index.php',$data);
		 $this->load->view('footer.php');
	 }

}