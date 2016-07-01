<?php
/**
 * Created by PhpStorm.
 * User: Slash
 * Date: 24/06/2016
 * Time: 00:59
 */
    class Services extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        ////////////////////////FILMS


        public function test(){
            $this->load->model('membre');
            $this->load->model('film');
            //header('Access-Control-Allow-Origin:*');
            //header('Content-Type: application/json');
            //$data = $this->membre->getMembreAll();
            $data = $this->film->getFilmRecentSameCategorie(null,"1");
            //echo count($data);
            var_dump($data);
            //echo json_encode($data);
        }
        public function services_FilmAll($nombre="",$categorie=""){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmAllServices($nombre,$categorie);
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_FilmRecent($nombre="",$categorie=""){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmRecentServices();
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_FilmPopulaire($nombre="",$categorie=""){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmPopulaireServices($nombre,$categorie);
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_Film($idFilm="1"){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmServices($idFilm);
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_FilmRecentSameCategorie($nombre="",$idFilm="1"){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmRecentSameCategorieServices($nombre,$idFilm);
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_FilmByTitle($nombre="",$categorie="",$title=""){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmByTitleServices($nombre,$categorie,$title);
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_FilmMembreFollow($idMembre="Memb-1"){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->getFilmMembreFollowServices($idMembre);
            $result['Film']=$data;
            echo json_encode($result);
        }

        public function services_FilmThisMonth($nombre="",$categorie=""){
            $this->load->model('film');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data=$this->film->filmThisMonthServices($nombre,$categorie);
            $result['Film']=$data;
            echo json_encode($result);
        }

        ////////////////////////////////////MEMBRES

        public function services_MembreAll($nombre=""){
            $this->load->model('membre');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data = $this->membre->getMembreAllServices($nombre);
            $result['Membre']=$data;
            echo json_encode($result);
        }

        public function services_Membre($idMembre="Memb-1"){
            $this->load->model('membre');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data = $this->membre->getMembreServices($idMembre);
            $result['Membre']=$data;
            echo json_encode($result);
        }


        ///////////////////////CATEGORIES

        public function services_CategorieAll($nombre=""){
            $this->load->model('categorie');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data = $this->categorie->getCategorieAllServices($nombre);
            $result['Categorie']=$data;
            echo json_encode($result);
        }

        public function services_Categorie($idCategorie="1"){
            $this->load->model('categorie');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data = $this->categorie->getCategorieServices($idCategorie);
            $result['Categorie']=$data;
            echo json_encode($result);
        }


        ///////////////////////OTHERS
        public function services_Signin($login="",$password=""){
            $this->load->model('membre');
            header('Access-Control-Allow-Origin:*');
            header('Content-Type: application/json');
            $data = $this->membre->signinServices($login,$password);
            echo json_encode($data);
        }


    }