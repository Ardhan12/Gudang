<?php 

class Testimoni extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->testimoni) && $this->session->admin->testimoni ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }

    public function index()
    {
        $data["dataTestimoni"] = $this->TestimoniModel->getAllTestimoni();
        // var_dump($data);die();
        $this->load->view('admin/adm_testimoni_rpage',$data);
        $this->load->view('templates/footer');
    }  

    public function tampilkan()
    { 
        $id_testi        = strval($_POST["id_testi"]); 
  
        $this->db->set('tampilkan', true);
        $this->db->where('id_testi', $id_testi);
        $this->db->update('testimoni');
        redirect(base_url('admin/testimoni/'));
        
    }

    // delete page
    public function delete()
    {
       $this->TestimoniModel->delete($_GET["id_testi"]);
       redirect(base_url("admin/testimoni"));
    }
 

}