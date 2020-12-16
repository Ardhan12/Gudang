<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berita extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $data['menu'] = $this->MenuModel->getAllMenu();
    $data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
    $this->load->view('templates/usersTemplates/header',$data);
  }

	public function index($berita = "berita")
	{
        $berita = isset($_GET["berita"]) ? $_GET["berita"] : $berita;
        $data["dataBerita"] = $this->BeritaModel->getAllBerita(); 
        // var_dump($data);die();

        $this->load->view("User/$berita",$data);
		    $this->load->view('templates/usersTemplates/footer');
  }

  public function detailBerita()
  {
    $data["dataBerita"] = $this->BeritaModel->getAllBerita();
    $data["berita"] = $this->BeritaModel->getBeritaByID($_GET["id_berita"])[0];
    $this->load->view("User/detailberita",$data);
    $this->load->view('templates/usersTemplates/footer');
  }
}