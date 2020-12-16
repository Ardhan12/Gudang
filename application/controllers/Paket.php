<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$data['menu'] = $this->MenuModel->getAllMenu();
		$data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
		$this->load->view('templates/usersTemplates/header',$data);

	}

	public function index($paket = "PakWisata")
	{
		$paket = isset($_GET["paket"]) ? $_GET["paket"] : $paket; 
		$data["dataPaketWisata"] = $this->PaketWisataModel->getAllPaketWisata();

		$this->load->view("User/$paket",$data);
		$this->load->view('templates/usersTemplates/footer');
	}

	public function detailPaket()
	{
		$data["dataPaketWisata"] = $this->PaketWisataModel->getPaketWisataByID($_GET["id_paket_wisata"])[0];
		$data["dataJadwal"]=$this->db->get_where("jadwal",["id_paket_wisata"=>$_GET["id_paket_wisata"]])->result();

		$this->load->view("User/detail_paket_wisata",$data);
		$this->load->view('templates/usersTemplates/footer');
	}
}