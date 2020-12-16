<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu();  
		$data['dataBanner'] = $this->BannerModel->getAllBanner(); 
		$this->load->view('templates/usersTemplates/header',$data);

	}

	public function index()
	{ 
		$data['dataHalStatis'] = $this->StaticPageModel->getAllStaticPage(); 
		$data['dataEvent'] = $this->EventModel->getAllEvent();  
		
		$this->load->view('User/home_page',$data);
		$this->load->view('templates/usersTemplates/footer');
    }
}