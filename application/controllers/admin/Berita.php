<?php

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (isset($this->session->admin->berita) && $this->session->admin->berita) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }

    public function index()
    {
        $data["dataBerita"] = $this->BeritaModel->getAllBerita();
        $this->load->view('admin/adm_berita_rpage', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $config = array(
            array(
                'field' => 'judul_berita',
                'label' => 'Judul Berita',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),

            array(
                'field' => 'isi_berita',
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),

        );

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('template/header');
            $this->load->view('admin/adm_berita_cpage');
            $this->load->view('templates/footer');
        } else {
            $this->add();
            redirect('admin/berita');
        }
    }
    public function edit()
    {
        $data["dataBerita"] = $this->BeritaModel->getBeritaByID($_GET["id_berita"])[0];


        $config = array(
            array(
                'field' => 'judul_berita',
                'label' => 'Judul Berita',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),

            array(
                'field' => 'isi_berita',
                'label' => 'Isi Berita',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),

        );

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('template/header');
            $this->load->view('admin/adm_berita_upage', $data);
            $this->load->view('templates/footer');
        } else {
            $this->update();
            redirect('admin/berita');
        }
    }

    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $judul_berita        = $_POST["judul_berita"];
        $namaadmin        = $_POST["admin"];
        $keterangan         = $_POST["isi_berita"];
        $gambar             = $this->upload();
        $tgl_post           = date("Y:m:d h:i");


        if (!$gambar) {
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "judul_berita" => $judul_berita,
            "gambar" => $gambar,
            "keterangan" => $keterangan,
            "tgl_post" => $tgl_post,
            "admin_berita" => $namaadmin

        );


        $this->BeritaModel->addNewBerita($data);
        redirect(base_url('admin/Berita/'));
    }

    // function to upload image
    public function upload()
    {


        $namafile   = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error      = $_FILES['gambar']['error'];
        $tempName   = $_FILES['gambar']['tmp_name'];
        $nama       = uniqid();

        $extensiValid   = ['jpg', 'jpeg', 'png'];
        $fileExtensi    = explode('.', $namafile);
        $fileExtensi    = strtolower(end($fileExtensi));
        $nama           = $nama . '.' . $fileExtensi;

        if (!in_array($fileExtensi, $extensiValid)) {
            echo `<script> alert(" gagal upload gambar") </script>`;
            return false;
        } elseif ($ukuranFile < 10240000) {
            move_uploaded_file($tempName, $_SERVER['DOCUMENT_ROOT'] . '/sarugo/assets/images/berita/' . $nama);
            return 'assets/images/berita/' . $nama;
        }
    }

    public function update()
    {

        //  var_dump($_POST,$_FILES);die();
        $judul_berita        = $_POST["judul_berita"];
        $keterangan         = $_POST["isi_berita"];
        $gambar             = $this->upload();
        $tgl_post           = date("Y:m:d h:i");

        if (!$gambar) {
            $gambar = $this->db->get_where("berita", ["id_berita" => $_POST["id_berita"]])->result()[0]->gambar;
        }


        if (!$gambar) {
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "judul_berita" => $judul_berita,
            "gambar" => $gambar,
            "keterangan" => $keterangan,
            "tgl_post" => $tgl_post,

        );

        $this->BeritaModel->update($_POST["id_berita"], $data);
        redirect(base_url('admin/berita/'));
    }

    // delete page
    public function delete()
    {
        $this->BeritaModel->delete($_GET["id_berita"]);
        redirect(base_url("admin/berita"));
    }
}
