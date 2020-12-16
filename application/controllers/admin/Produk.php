<?php 

class Produk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->produk) && $this->session->admin->produk ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }
    
    public function index()
    {
        $data['dataProduk'] = $this->ProdukModel->getAllProduk();
        $this->load->view('admin/adm_produk_rpage',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $config = array(
            array(
                'field' => 'nama_produk',
                'label' => 'Nama Produk',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),

            array(
                'field' => 'harga_satuan',
                'label' => 'Harga Satuan',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                    'numeric' => '%s hanya berisi angka'
                )
            ),

            array(
                'field' => 'berat_satuan',
                'label' => 'Berat Satuan',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                    'numeric' => '%s hanya berisi angka'

                )
            ),

            array(
                'field' => 'komposisi',
                'label' => 'Komposisi',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),
            array(
                'field' => 'penjelasan_tambahan',
                'label' => 'Penjelasan Tambahan',
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
            $this->load->view('admin/adm_produk_cpage');
            $this->load->view('templates/footer');
        } else {
            $this->add();
            redirect('admin/produk');
        }

    } 

    public function edit()
    {   $data["produk"] = $this->ProdukModel->getProdukByID($_GET["id_produk"])[0];  
        
        $this->load->view('admin/adm_produk_upage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        // var_dump($_POST,$_FILES,sizeof($_FILES['gambar'])); die();

        // get data from post method
        $nama_produk        = $_POST["nama_produk"];
        $harga_satuan         = $_POST["harga_satuan"];
        $berat_satuan             = $_POST["berat_satuan"];
        $komposisi             = $_POST["komposisi"];
        $keterangan             = $_POST["keterangan"];
        $penjelasan_produk             = $_POST["penjelasan_produk"]; 
        $gambar             = $this->upload();
         

        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_produk"=>$nama_produk,
            "gambar"=>"images are in gambar_produk table"  ,
            "harga_satuan"=>$harga_satuan,
            "komposisi"=>$komposisi,
            "keterangan"=>$keterangan,
            "penjelasan_produk"=>$penjelasan_produk,
            "berat_satuan"=>$berat_satuan,
        );

        
            $id_produk = $this->ProdukModel->addNewProduk($data); 


            $gambarProduk = array();

            foreach ($gambar as $dataGambar) {
                array_push($gambarProduk,array(
                    "id_produk"=>$id_produk,
                    "src"=>$dataGambar
                ));
            }

            $this->db->insert_batch('gambar_produk',$gambarProduk);

            redirect(base_url('admin/produk/'));
        

    }

    // function to upload image
    public function upload()
    {
        $gambar = [];
        for ($index=0; $index < sizeof($_FILES['gambar']['name']); $index++) { 
             
        
            $namafile   = $_FILES['gambar']['name'][$index];
            $ukuranFile = $_FILES['gambar']['size'][$index];
            $error      = $_FILES['gambar']['error'][$index];
            $tempName   = $_FILES['gambar']['tmp_name'][$index];
            $nama       = uniqid();

            $extensiValid   = ['jpg','jpeg','png'];
            $fileExtensi    = explode('.',$namafile);
            $fileExtensi    = strtolower(end($fileExtensi));
            $nama           = $nama.'.'.$fileExtensi;

            if(!in_array($fileExtensi,$extensiValid)){
                echo `<script> alert(" gagal upload gambar") </script>`;
                return false;
            } elseif ($ukuranFile < 10240000) {
                move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/produk/'.$nama);
                array_push($gambar,'assets/images/produk/'.$nama);
            }

        }
        return $gambar;
    } 

    public function update()
    { 
        //  var_dump($_POST,$_FILES);die();

         $nama_produk        = $_POST["nama_produk"];
         $harga_satuan       = $_POST["harga_satuan"];
         $berat_satuan       = $_POST["berat_satuan"];
         $komposisi          = $_POST["komposisi"];
         $keterangan         = $_POST["keterangan"];
         $penjelasan_produk  = $_POST["penjelasan_produk"]; 
         $gambar             = $this->upload();

        if(sizeof($gambar)==0){
            $gambar = $this->db->get_where("produk",["id_produk"=>$_POST["id_produk"]])->result()[0]->gambar;
        }else{
            $gambarProduk = array();

            foreach ($gambar as $dataGambar) {
                array_push($gambarProduk,array(
                    "id_produk"=>$_POST["id_produk"],
                    "src"=>$dataGambar
                ));
            }

            $this->db->insert_batch('gambar_produk',$gambarProduk);
            
        }

        
        if(!$gambar){
            echo `<script> alert(" gagal upload gambar") </script>`;
        }

        $data = array(
            "nama_produk"=>$nama_produk,
            "gambar"=>"images are in gambar_produk table"  ,
            "harga_satuan"=>$harga_satuan,
            "komposisi"=>$komposisi,
            "keterangan"=>$keterangan,
            "penjelasan_produk"=>$penjelasan_produk,
            "berat_satuan"=>$berat_satuan,
        );

        
            $this->ProdukModel->update($_POST["id_produk"],$data);
            redirect(base_url('admin/produk/'));
        
    }

    // delete page
    public function delete()
    {
       $this->ProdukModel->delete($_GET["id_produk"]);
       redirect(base_url("admin/produk"));
    }

     

 
 
}