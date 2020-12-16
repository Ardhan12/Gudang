<?php

class Statis extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->hal_statis) && $this->session->admin->hal_statis ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }
    
    public function index()
    {
        $data['halaman'] = $this->StaticPageModel->getAllStaticPage();
        $this->load->view('admin/adm_statis_rpage',$data);
        $this->load->view('templates/footer');
    }
    /* 
     Section to create new statis page 
     */
    public function statis_create()
    {
        $config = array(
            array(
                'field' => 'judul_hlmstat',
                'label' => 'Judul Halaman',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),

            array(
                'field' => 'isi_hlmsat',
                'label' => 'Isi Halaman',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            )
                );

                $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
                $this->form_validation->set_rules($config);
        
                if ($this->form_validation->run() == FALSE) {
                    //$this->load->view('template/header');
                    $this->load->view('admin/adm_statis_cpage');
                    $this->load->view('templates/footer');
                } else {
                    $this->add();
                    redirect('admin/statis');
                }
    }

    // methode to add new data of static page
    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $judul          = $_POST["judul_hlmstat"];
        $isi            = $_POST["isi_hlmsat"];
        $gambar         = $this->upload();
        $addToBeranda   = isset($_POST["tampilkan_hlmstat"])?true:false;

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        
            $this->StaticPageModel->add($judul,$isi,$gambar,$addToBeranda);
            redirect(base_url('admin/statis/'));
        

    }

    // function to upload image
    public function upload()
    {
        $namafile   = $_FILES['gbr_hlmstat']['name'];
        $ukuranFile = $_FILES['gbr_hlmstat']['size'];
        $error      = $_FILES['gbr_hlmstat']['error'];
        $tempName   = $_FILES['gbr_hlmstat']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg','jpeg','png'];
        $fileExtensi    = explode('.',$namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama.'.'.$fileExtensi;

        if(!in_array($fileExtensi,$extensiValid)){
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/statis/'.$nama);
            return 'assets/images/statis/'.$nama;
        }
    }
    // end of section of add new static page

    // edit
    public function edit()
    {
        $data["halaman"] = $this->StaticPageModel->getDataByID($_GET["id"]);
        $this->load->view("admin/adm_statis_upage",$data);
        $this->load->view("templates/footer");
    }

    // upload
    public function update()
    {
        $judul          = $_POST["judul_hlmstat"];
        $isi            = $_POST["isi_hlmsat"];
        $gambar         = $this->upload();
        $addToBeranda   = isset($_POST["tampilkan_hlmstat"])?true:false;

        if(!$gambar){
            $gambar = $this->db->get_where("hal_statis",["id"=>$_POST["id"]])->result()[0]->gambar;

        } 

        
        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data= array(
            "judul"=>$judul,
            "isi"   => $isi,
            "gambar"=> $gambar,
            "add_to_beranda"=> $addToBeranda
        );
        
            $this->StaticPageModel->update($_POST["id"],$data);
            redirect(base_url('admin/statis/'));
        
    }

    // delete page
    public function delete()
    {
       $this->StaticPageModel->delete($_GET["id"]);
       redirect(base_url("admin/statis"));
    }

}
?>