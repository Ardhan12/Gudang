<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $data['menu'] = $this->MenuModel->getAllMenu();
        $data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
        $this->load->view('templates/usersTemplates/header',$data);
    }

	public function index($wisata = "wisata")
	{
        $wisata = isset($_GET["wisata"]) ? $_GET["wisata"] : $wisata;
        $data["dataWisata"] = $this->WisataModel->getAllWisata();

		
        $this->load->view("User/$wisata",$data);
        $this->load->view('templates/usersTemplates/footer');
    }


    public function detailwisata()
    {
        $data["wisata"] = $this->WisataModel->getWisataByID($_GET["id"])[0];
        $data["dataResource"] = $this->ResourceModel->getResourceByID($_GET["id"]);
         
        $this->load->view("User/detail_wisata" ,$data);
        $this->load->view('templates/usersTemplates/footer');
    }
}