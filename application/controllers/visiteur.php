<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visiteur extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function loadHeaderVisiteur(){
		$this->load->view('avantMenu.php');
		$this->load->view('headerVisiteur.php');
		$this->load->view('apresMenu.php');
		$this->load->view('includeIndex.php');
	}
	public function loadHeaderVisiteurEnsemble(){
		$this->load->view('avantMenu.php');
		$this->load->view('headerVisiteur.php');
		$this->load->view('apresMenuEnsemble.php');
		$this->load->view('includeIndex.php');
	}
	
	public function catalogue(){
		$this->loadHeaderVisiteur();
			$this->load->model('film');
			$data['listTop6FilmRecent']=$this->film->getFilmRecent(6,null);
			$data['listTop6FilmPopulaire']=$this->film->getFilmPopulaire(6,null);
			$data['listTop6Film']=$this->film->getFilmAll(6,null);
			$this->load->view('catalogue.php',$data);
		$this->load->view('footer.php');
	}
	public function details($id="1"){
		$this->loadHeaderVisiteur();
			$this->load->model('film');
			$data['film']=$this->film->getFilm($id);
			$data['listTop6FilmMemeCategorie']=$this->film->getFilmRecentSameCategorie(6,$id);
			$this->load->view('details.php',$data);
			$this->load->view('includeDetails.php');
		$this->load->view('footer.php');
	}
	public function ensemble(){
		$this->loadHeaderVisiteurEnsemble();
			$this->load->model('categorie');
			$data['listCategorie']=$this->categorie->getCategorieAll();
			$this->load->model('film');
			$data['listFilm']=$this->film->getFilmAll();
			$this->load->view('ensemble.php',$data);
			$this->load->view('includeEnsemble.php');
		$this->load->view('footer.php');
	}
	public function index(){
		$this->loadHeaderVisiteur();
			$this->load->model('film');
			$data['listTop12FilmRecent']=$this->film->getFilmRecent(12,null);
			$this->load->model('categorie');
			$data['listCategorie']=$this->categorie->getCategorieAll();
			$this->load->view('index.php',$data);
		$this->load->view('footer.php');
	}
	public function nonacces(){
		$this->loadHeaderVisiteur();
			$this->load->view('nonacces.php');
		$this->load->view('footer.php');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
