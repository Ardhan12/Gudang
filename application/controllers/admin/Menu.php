<?php

class Menu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->menu) && $this->session->admin->menu ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }

    public function index()
    {
        $data["menu"] = $this->MenuModel->getAllMenu();
        $this->load->view('admin/adm_menu_rpage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        # add new menu
        // berikan data2 judul halaman statis ke halaman create menu
        $data["halaman"] = $this->StaticPageModel->getAllTitle();
        // var_dump($data);die();
        $this->load->view('admin/adm_menu_cpage',$data);
        $this->load->view('templates/footer');
    }
    public function addnew()
    {
        $nama_menu = $_POST["nama_menu"];
        $link_hal_statis= $_POST["link_menu"];
        $status_menu    = isset($_POST["tampilkan_menu"])? $_POST["tampilkan_menu"] : 0;
        $data = array(
            "nama_menu"=>$nama_menu,
            "link_hal_statis" => $link_hal_statis,
            "status_menu"=>$status_menu
        );

        $this->MenuModel->addNewMenu($data);
        redirect(base_url("admin/menu"));
    }

    public function update()
    {
        $data["titles"] = $this->StaticPageModel->getAllTitle();
        $data["menu"] = $this->MenuModel->getMenuById($_GET["id"])->result()[0]; 
        $this->load->view('admin/adm_menu_upage',$data);
        $this->load->view('templates/footer');
    }
    public function updateData()
    {

        
        $nama_menu = $_POST["nama_menu"];
        $link_hal_statis= $_POST["link_menu"];
        $status_menu    = $_POST["tampilkan_menu"];
        $data = array(
            "nama_menu"=> $nama_menu,
            "link_hal_statis" => $link_hal_statis,
            "status_menu"=> $status_menu
        );
        $this->MenuModel->update($_POST["id"],$data);
        redirect(base_url("admin/menu"));
    }

    public function delete()
    { 
        $this->MenuModel->delete($_GET["id"]);
        redirect(base_url("admin/menu"));
    }
}