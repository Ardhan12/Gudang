<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class adm_sarugo extends CI_Controller {

    public function __construct()
    {
        parent ::__construct();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_adm');

        //$this->load->model('');
    }

    public function home_page()
    {
        $this->load->view('admin/adm_home_page');
        $this->load->view('templates/footer');
    }

    public function statis_read()
    {
        $this->load->view('admin/adm_statis_rpage');
        $this->load->view('templates/footer');
    }
    /* 
     Section to create new statis page 
     */
    public function statis_create()
    {
        $this->load->view('admin/adm_statis_cpage');
        $this->load->view('templates/footer');
    }
    // method to add and store new data of hal_statis to db
    public function add_new_hal_statis()
    {
        var_dump($_POST,$_FILES);die();

        // get data from post method
        $judul          = $_POST["judul_hlmstat"];
        $isi            = $_POST["isi_hlmsat"];
        $gambar         = $_POST["gambar"];
        $addToBeranda   = $_POST["tampilkan_hlmstat"];

    }

    // methode to upload image
    
    // end of method to upload image

    /* end section from add new static page */

    public function statis_update()
    {
        $this->load->view('admin/adm_statis_upage');
        $this->load->view('templates/footer');
    }

    public function statis_delete()
    {
        $this->load->view('admin/adm_statis_rpage');
        $this->load->view('templates/footer');
    }

    public function menu_read()
    {
        $this->load->view('admin/adm_menu_rpage');
        $this->load->view('templates/footer');
    }

    public function menu_create()
    {
        $this->load->view('admin/adm_menu_cpage');
        $this->load->view('templates/footer');
    }

    public function menu_update()
    {
        $this->load->view('admin/adm_menu_upage');
        $this->load->view('templates/footer');
    }

    public function menu_delete()
    {
        $this->load->view('admin/adm_menu_rpage');
        $this->load->view('templates/footer');
    }

    public function submenu_read()
    {
        $this->load->view('admin/adm_submenu_rpage');
        $this->load->view('templates/footer');
    }

    public function submenu_create()
    {
        $this->load->view('admin/adm_submenu_cpage');
        $this->load->view('templates/footer');
    }

    public function submenu_update()
    {
        $this->load->view('admin/adm_submenu_upage');
        $this->load->view('templates/footer');
    }

    public function submenu_delete()
    {
        $this->load->view('admin/adm_submenu_rpage');
        $this->load->view('templates/footer');
    }

    public function banner_read()
    {
        $this->load->view('admin/adm_banner_rpage');
        $this->load->view('templates/footer');
    }

    public function banner_create()
    {
        $this->load->view('admin/adm_banner_cpage');
        $this->load->view('templates/footer');
    }

    public function banner_update()
    {
        $this->load->view('admin/adm_banner_upage');
        $this->load->view('templates/footer');
    }

    public function banner_delete()
    {
        $this->load->view('admin/adm_banner_rpage');
        $this->load->view('templates/footer');
    }

    public function wisata_read()
    {
        $this->load->view('admin/adm_wisata_rpage');
        $this->load->view('templates/footer');
    }

    public function wisata_create()
    {
        $this->load->view('admin/adm_wisata_cpage');
        $this->load->view('templates/footer');
    }

    public function wisata_update()
    {
        $this->load->view('admin/adm_wisata_upage');
        $this->load->view('templates/footer');
    }

    public function wisata_delete()
    {
        $this->load->view('admin/adm_wisata_rpage');
        $this->load->view('templates/footer');
    }

    public function produk_read()
    {
        $this->load->view('admin/adm_produk_rpage');
        $this->load->view('templates/footer');
    }

    public function produk_create()
    {
        $this->load->view('admin/adm_produk_cpage');
        $this->load->view('templates/footer');
    }

    public function produk_update()
    {
        $this->load->view('admin/adm_produk_upage');
        $this->load->view('templates/footer');
    }

    public function produk_delete()
    {
        $this->load->view('admin/adm_produk_rpage');
        $this->load->view('templates/footer');
    }

    public function paketwisata_read()
    {
        $this->load->view('admin/adm_paketwisata_rpage');
        $this->load->view('templates/footer');
    }

    public function paketwisata_create()
    {
        $this->load->view('admin/adm_paketwisata_cpage');
        $this->load->view('templates/footer');
    }

    public function paketwisata_update()
    {
        $this->load->view('admin/adm_paketwisata_upage');
        $this->load->view('templates/footer');
    }

    public function paketwisata_delete()
    {
        $this->load->view('admin/adm_paketwisata_rpage');
        $this->load->view('templates/footer');
    }

    public function testimoni_read()
    {
        $this->load->view('admin/adm_testimoni_rpage');
        $this->load->view('templates/footer');
    }

    public function testimoni_create()
    {
        $this->load->view('admin/adm_testimoni_cpage');
        $this->load->view('templates/footer');
    }

    public function testimoni_delete()
    {
        $this->load->view('admin/adm_testimoni_rpage');
        $this->load->view('templates/footer');
    }

    public function berita_read()
    {
        $this->load->view('admin/adm_berita_rpage');
        $this->load->view('templates/footer');
    }

    public function berita_create()
    {
        $this->load->view('admin/adm_berita_cpage');
        $this->load->view('templates/footer');
    }

    public function berita_update()
    {
        $this->load->view('admin/adm_berita_upage');
        $this->load->view('templates/footer');
    }

    public function berita_delete()
    {
        $this->load->view('admin/adm_berita_rpage');
        $this->load->view('templates/footer');
    }

}


?>