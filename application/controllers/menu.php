<?php 

class Menu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		// $data['dataHalStatis'] = $this->StaticPageModel->getAllStaticPage(); 
		$this->load->view('templates/usersTemplates/header',$data);
		
    }

    public function index()
    {
        $data["dataHalUtama"] = $this->StaticPageModel->getDataByTitle($_GET['judul_hal_statis'])[0];
        $this->load->view('User/halaman_menu',$data);
		$this->load->view('templates/usersTemplates/footer');
    }
}