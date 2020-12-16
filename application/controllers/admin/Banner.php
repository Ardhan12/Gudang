<?php

class Banner extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (isset($this->session->admin->banner) && $this->session->admin->banner) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }

    public function index()
    {
        $data["dataBanner"] = $this->BannerModel->getAllBanner();
        $this->load->view('admin/adm_banner_rpage', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data["banner"] = $this->BannerModel->getBannerByID($_GET["id"])[0];
        $this->load->view('admin/adm_banner_upage', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {

        $config = array(
            array(
                'field' => 'judul',
                'label' => 'Judul Banner',
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
            $this->load->view('admin/adm_banner_cpage');
            $this->load->view('templates/footer');
        } else {
            $this->add();
            redirect('admin/banner');
        }
    }

    public function delete()
    {
        $this->BannerModel->delete($_GET["id"]);
        redirect("admin/banner");
    }


    // methode to add new data of static page
    public function add()
    {
        // var_dump($_POST,$_FILES);die();
        // var_dump( $_FILES);die(); 
        $judul          = $_POST["judul"];
        $foto         = $this->upload();
        $tgl_posting   = date("Y:m:d h:i");

        if (!$foto) {
            echo `<script> alert(" gagal upload gambar") </script>`;
            return;
        }

        $data = array(
            "judul" => $judul,
            "foto"  => $foto,
            "tgl_posting" => $tgl_posting
        );
        $this->BannerModel->add($data);
        redirect(base_url('admin/banner/'));
    }

    // function to upload image
    public function upload()
    {
        $namafile   = $_FILES['gbr_banner']['name'];
        $ukuranFile = $_FILES['gbr_banner']['size'];
        $error      = $_FILES['gbr_banner']['error'];
        $tempName   = $_FILES['gbr_banner']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg', 'jpeg', 'png'];
        $fileExtensi    = explode('.', $namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama . '.' . $fileExtensi;

        if (!in_array($fileExtensi, $extensiValid) || $error) {
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName, $_SERVER['DOCUMENT_ROOT'] . '/sarugo/assets/images/banner/' . $nama);
            return 'assets/images/banner/' . $nama;
        }
    }
    // end of section of add new static page


    // update data
    public function update()
    {
        $judul          = $_POST["judul"];
        $foto         = $this->upload();
        $tgl_posting   = date("Y:m:d h:i");
        $id_banner      = $_POST["id_banner"];
        $databanner = $this->BannerModel->getBannerByID($id_banner)[0]->foto;

        $foto = $foto ? $foto :  $databanner;
        if (!$foto) {
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "judul" => $judul,
            "foto"  => $foto,
            "tgl_posting" => $tgl_posting
        );
        $this->BannerModel->update($id_banner, $data);
        redirect(base_url('admin/banner/'));
    }
}
