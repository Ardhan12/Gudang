<?php

class Wisata extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->wisata) && $this->session->admin->wisata ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }

    public function index()
    {
        $data["dataWisata"] = $this->WisataModel->getAllWisata();
        $this->load->view('admin/adm_wisata_rpage',$data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->view('admin/adm_wisata_cpage');
        $this->load->view('templates/footer');
    }
    public function edit()
    {   $data["dataWisata"] = $this->WisataModel->getWisataByID($_GET["id"])[0]; 
        $data["dataResource"] = $this->ResourceModel->getResourceByID($_GET["id"]) ; 
        
        $this->load->view('admin/adm_wisata_upage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_wisata        = $_POST["nama_wisata"];
        $keterangan         = $_POST["keterangan"];
        $lokasi             = $_POST["lokasi"];
        $tgl_post             = date("Y:m:d h:i");
        $gambar             = $this->upload();
         

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_wisata"=>$nama_wisata,
            "gambar"=>$gambar  ,
            "keterangan"=>$keterangan,
            "lokasi"=>$lokasi,
            "tgl_post"=>$tgl_post,
        );

        
            $this->WisataModel->addNewWisata($data);
            redirect(base_url('admin/wisata/'));
        

    }

    // function to upload image
    public function upload()
    {
        $namafile   = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error      = $_FILES['gambar']['error'];
        $tempName   = $_FILES['gambar']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg','jpeg','png'];
        $fileExtensi    = explode('.',$namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama.'.'.$fileExtensi;

        if(!in_array($fileExtensi,$extensiValid)){
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/wisata/'.$nama);
            return 'assets/images/wisata/'.$nama;
        }
    } 

    public function update()
    { 
        $nama_wisata        = $_POST["nama_wisata"];
        $keterangan         = $_POST["keterangan"];
        $lokasi             = $_POST["lokasi"];
        $tgl_post           = date("Y:m:d h:i");
        $gambar             = $this->upload();

        if(!$gambar){
            $gambar = $this->db->get_where("wisata",["id_wisata"=>$_POST["id"]])->result()[0]->gambar;

        } 

        
        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_wisata"=>$nama_wisata,
            "gambar"=>$gambar  ,
            "keterangan"=>$keterangan,
            "lokasi"=>$lokasi,
            "tgl_post"=>$tgl_post,
        );
        
            $this->WisataModel->update($_POST["id"],$data);
            redirect(base_url('admin/wisata/'));
        
    }

    // delete page
    public function delete()
    {
       $this->WisataModel->delete($_GET["id"]);
       redirect(base_url("admin/wisata"));
    }

    //resource functionality
    public function addResource()
    {
        //  var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_resource      = $_POST["nama_resource"];
        $id_wisata          = $_POST["id_wisata"];
        $keterangan         = $_POST["keterangan"];
        $tgl_post           = date("Y:m:d h:i");
        $tipe_resource      = $_GET["type"]=="video"?true:false;
        $link_resource      = $tipe_resource?$this->uploadVideo():$this->upload();
         

        if(!$link_resource){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_resource"=>$nama_resource,
            "id_wisata"=>$id_wisata  ,
            "link_resource"=>$link_resource,
            "keterangan"=>$keterangan,
            "tgl_post"=>$tgl_post,
            "tipe_resource"=>$tipe_resource,
        );

        
            $this->ResourceModel->addNewResource($data);
            redirect(base_url('admin/wisata/edit?id=').$id_wisata);
    }

    public function uploadVideo()
    {
        $namafile   = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error      = $_FILES['gambar']['error'];
        $tempName   = $_FILES['gambar']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['mp4','ogg','3gp','mkv'];
        $fileExtensi    = explode('.',$namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama.'.'.$fileExtensi;

        if(!in_array($fileExtensi,$extensiValid)){
            echo `<script> alert(" gagal upload gambar");swal(" gagal upload gambar"); </script>`;
            return false;
        } elseif ($ukuranFile < 102400000) {
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/video/'.$nama);
            return 'assets/video/'.$nama;
        }
    } 

    function deleteResource()
    {
        $this->ResourceModel->delete($_GET["id"]);
        redirect(base_url('admin/wisata/edit?id=').$_GET["id_wisata"]);
    }
}