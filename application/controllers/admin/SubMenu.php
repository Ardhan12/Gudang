<?php

class SubMenu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->sub_menu) && $this->session->admin->sub_menu ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }

    }
    public function index()
    {
        $data["dataSubMenu"] = $this->SubMenuModel->getAllSubMenu(); 
        $data["dataMenu"] = $this->MenuModel->getAllMenu(); 
        $this->load->view('admin/adm_submenu_rpage',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data["dataHalaman"] = $this->StaticPageModel->getAllStaticPage();
        $data["dataMenu"] = $this->MenuModel->getAllMenu();  
        $this->load->view('admin/adm_submenu_cpage',$data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $nama_sub_menu = $_POST["nama_sub_menu"];
        $id_menu = $_POST["menu_utama"];
        $hal_statis = $_POST["hal_statis"];
        $status_sub_menu    = isset($_POST["tampilkan"])? $_POST["tampilkan"] : 0;
        $data = array(
            "nama_sub_menu"=>$nama_sub_menu,
            "id_menu" => $id_menu,
            "hal_statis"=>$hal_statis,
            "status_sub_menu"=>$status_sub_menu
        );

        $this->SubMenuModel->addNewSubMenu($data);
        redirect(base_url("admin/submenu"));
    }
    public function update()
    {
        $data["dataHalaman"] = $this->StaticPageModel->getAllStaticPage();
        $data["dataMenu"] = $this->MenuModel->getAllMenu();
        $data["dataSubMenu"] = $this->SubMenuModel->getSubMenuByID($_GET["id"])[0];
        // var_dump($data);die(); 
        $this->load->view('admin/adm_submenu_upage',$data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $nama_sub_menu = $_POST["nama_sub_menu"];
        $id_menu = $_POST["menu_utama"];
        $hal_statis = $_POST["hal_statis"];
        $status_sub_menu    = isset($_POST["tampilkan"])? $_POST["tampilkan"] : 0;
        $data = array(
            "nama_sub_menu"=>$nama_sub_menu,
            "id_menu" => $id_menu,
            "hal_statis"=>$hal_statis,
            "status_sub_menu"=>$status_sub_menu
        );

        $this->SubMenuModel->updateSubMenu($_POST["id"],$data);
        redirect(base_url("admin/submenu"));
    }

    public function delete()
    {
        $this->SubMenuModel->delete($_GET["id"]);
        redirect(base_url("admin/submenu"));
    }
}