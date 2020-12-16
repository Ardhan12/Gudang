<?php 

class PaketWisata extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(isset($this->session->admin->paket_wisata) && $this->session->admin->paket_wisata ){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar_adm');
        } else {
            redirect(base_url("admin/login"));
        }
    }
    
    public function index()
    {
        $data['dataPaketWisata'] = $this->PaketWisataModel->getAllPaketWisata();
        $this->load->view('admin/adm_paketwisata_rpage',$data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $config = array(
            array(
                'field' => 'nama_paket_wisata',
                'label' => 'Nama Paket Wisata',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),
            array(
                'field' => 'jumlah_orang',
                'label' => 'Jumlah Orang',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                    'numeric' => '%s hanya berisi angka'
                )
            ),
            array(
                'field' => 'Biaya',
                'label' => 'Biaya',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                    'numeric' => '%s hanya berisi angka'
                )
            ),
            array(
                'field' => 'jumlah_hari',
                'label' => 'Jumlah Hari',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                    'numeric' => '%s hanya berisi angka'
                )
            ),
            array(
                'field' => 'object_wisata',
                'label' => 'Object Wisata',
                'rules' => 'required',
                'errors' => array(
                    'required' => '%s tidak boleh kosong',
                )
            ),
            array(
                'field' => 'fasilitas',
                'label' => 'Fasilitas',
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
            $this->load->view('admin/adm_paketwisata_cpage');
            $this->load->view('templates/footer');
        } else {
            $this->add();
            redirect('admin/PaketWisata');
        }
    } 

    public function edit()
    {   $data["paketWisata"] = $this->PaketWisataModel->getPaketWisataByID($_GET["id_paket_wisata"])[0];  
        $data["dataJadwal"] = $this->db->get_where("jadwal",["id_paket_wisata"=>$_GET["id_paket_wisata"]])->result();

        // var_dump($data);die();
        $this->load->view('admin/adm_paketwisata_upage',$data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        // var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_paket_wisata        = $_POST["nama_paket_wisata"];
        $jumlah_orang         = $_POST["jumlah_orang"];
        $jumlah_hari             = $_POST["jumlah_hari"];
        $objek_wisata             = $_POST["objek_wisata"];
        $fasilitas             = $_POST["fasilitas"];
        $biaya             = $_POST["biaya"];
        $jadwal =[];

        for($index=1;$index<=strval($jumlah_hari);$index++){
            array_push($jadwal,$_POST["jadwal$index"]);
        }
        var_dump($jadwal); 
         

        // if(!$gambar){
        //     echo `<script> alert(" gagal upload gambar") </script>`;
        // }

        $data = array(
            "nama_paket_wisata"=>$nama_paket_wisata,
            "jumlah_orang"=>$jumlah_orang  ,
            "jumlah_hari"=>$jumlah_hari,
            "objek_wisata"=>$objek_wisata,
            "fasilitas"=>$fasilitas,
            "biaya"=>$biaya, 
        );

        
            $this->PaketWisataModel->addNewPaketWisata($data);

            $this->db->where("nama_paket_wisata",$nama_paket_wisata);
            $id_paket_wisata = $this->db->get("paket_wisata")->result()[0]->id_paket_wisata;
            $id_paket_wisata==null?1:$id_paket_wisata;

 


            $data = array();
            foreach ($jadwal as $key => $kegiatan) {
                array_push($data,array(
                    "hari_jadwal" => $key+1,
                    "kegiatan" =>$kegiatan,
                    "id_paket_wisata" =>$id_paket_wisata,
                ));
            }
            
 

            $this->db->insert_batch('jadwal', $data);
        
            redirect(base_url('admin/paketwisata/'));
        

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
            move_uploaded_file($tempName,$_SERVER['DOCUMENT_ROOT'].'/sarugo/assets/images/produk/'.$nama);
            return 'assets/images/produk/'.$nama;
        }
    } 

    public function update()
    { 
        //  var_dump($_POST,$_FILES);die();

        // get data from post method
        $nama_paket_wisata      = $_POST["nama_paket_wisata"];
        $id_paket_wisata      = $_POST["id_paket_wisata"];
        $jumlah_orang           = strval($_POST["jumlah_orang"]);
        $jumlah_hari            = strval($_POST["jumlah_hari"]);
        $objek_wisata           = $_POST["objek_wisata"];
        $fasilitas              = $_POST["fasilitas"];
        $biaya                  = strval($_POST["biaya"]);
        $jadwal                 = [];
        $idJadwal                 = [];

        for($index=0;$index<$jumlah_hari;$index++){
            array_push($jadwal,$_POST["jadwal$index"]);
            array_push($idJadwal,strval($_POST["id_jadwal$index"]));
        }  
        
        // var_dump(strval($_POST["id_jadwal0"]),$jadwal,$idJadwal);

        $data = array(
            "nama_paket_wisata"=>$nama_paket_wisata,
            "jumlah_orang"=>$jumlah_orang  ,
            "jumlah_hari"=>$jumlah_hari,
            "objek_wisata"=>$objek_wisata,
            "fasilitas"=>$fasilitas,
            "biaya"=>$biaya, 
        );

        
         $this->PaketWisataModel->update($id_paket_wisata,$data);
 


        $data = array();
        foreach ($jadwal as $key => $kegiatan) {
            array_push($data,array(
                "id_jadwal" =>strval($idJadwal[$key]),
                "hari_jadwal" => $key+1,
                "kegiatan" =>$kegiatan,
                "id_paket_wisata" =>$id_paket_wisata,
            ));
        }
        // var_dump($data);die();
            
 

        $this->db->update_batch('jadwal', $data,"id_jadwal");  
        redirect(base_url('admin/paketwisata/'));
        
    }

    // delete page
    public function delete()
    {
       $this->PaketWisataModel->delete($_GET["id_paket_wisata"]);
       $this->db->delete("jadwal",array("id_paket_wisata"=>$_GET["id_paket_wisata"]));
       redirect(base_url("admin/paketwisata"));
    }

     

 
 
}