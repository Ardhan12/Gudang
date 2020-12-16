<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $data['menu'] = $this->MenuModel->getAllMenu();
    $data['subMenu'] = $this->SubMenuModel->getAllSubMenu(); 
    $this->load->view('templates/usersTemplates/header',$data);
  }

  public function index()
  {   
    $data["dataEvent"] = $this->EventModel->getAllEvent();

    $id_event = $data["dataEvent"][0]->id_event;
    $id_event = isset($_GET["id_event"])?$_GET["id_event"] : $id_event;

    $data["event"] = $this->EventModel->getEventByID($id_event)[0];

    $this->load->view("User/detail_event",$data);
    $this->load->view('templates/usersTemplates/footer');
  }
}