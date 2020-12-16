<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		$this->load->view('templates/usersTemplates/header',$data);

	}

	public function index()
	{
		$this->db->order_by('id_testi', 'DESC');
		$data["dataTestimoni"] = $this->db->get_where("testimoni",["tampilkan"=>true])->result();

		// var_dump($data);die();
		$this->load->view('User/Testimoni',$data);
		$this->load->view('templates/usersTemplates/footer');
	}
	
	public function add()
	{
		// var_dump($_POST);die();

		// get data from post method
        $nama_testi        	= htmlspecialchars($_POST["nama_testi"]);
        $pekerjaan_testi	= htmlspecialchars($_POST["pekerjaan_testi"]);
        $alamat_testi		= htmlspecialchars($_POST["alamat_testi"]);
        $pesan_testi		= htmlspecialchars($_POST["pesan_testi"]);
        $bintang			= strval($_POST["star"]);
          
        $data = array(
            "nama_testi"=>$nama_testi,
            "pekerjaan_testi"=>$pekerjaan_testi  ,
            "alamat_testi"=>$alamat_testi,
            "pesan_testi"=>$pesan_testi,
            "bintang"=>$bintang,
            "tampilkan"=>true,
        );
		 
		if($this->security->xss_clean($data,true)){
			$this->TestimoniModel->addNewTestimoni($data);
		}else{
			var_dump($data);die();
		}
		
         redirect(base_url("testimoni"));
	}
}