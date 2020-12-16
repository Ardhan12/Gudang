<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spradm_sarugo extends CI_Controller {

	public function checkAdmin()
	{
		// var_dump($this->session->spradmin);die();
		if(!isset($this->session->spradmin)){
			redirect(base_url("admin"));
		}
	}
    public function __construct()
    {	
		parent ::__construct();
		$this->checkAdmin();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_spradm');
        $this->load->model('super_admin/akun_model');
    }

    public function home_page()
    {
		$data = $this->akun_model->count();
        $this->load->view('super_admin/spradm_home_page', ['data' => $data]);
        $this->load->view('templates/footer');
    }

    public function akun_read()
    {
        $rows = $this->akun_model->read();
        $this->load->view('super_admin/spradm_akun_rpage', ['rows' => $rows]);
        $this->load->view('templates/footer');
    }

    public function akun_create()
    {

		// var_dump($_POST);die();
        $config = array(
			array(
				'field' => 'nip_admin',
				'label' => 'NIP Admin',
				'rules' => 'required|alpha_numeric|is_unique[akun.nip_admin]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric' => '%s hanya berisi angka (1-9) dan huruf (A-Z)',
					'is_unique' => '%s sudah ada didatabase'
				)
			),
			array(
				'field' => 'nama_admin',
				'label' => 'Nama Admin',
				'rules' => 'alpha_numeric_spaces',
				'errors' => array( 
					'alpha_numeric_spaces' => '%s hanya berisi huruf (A-Z)'
				)
			),
			array(
				'field' => 'telp_admin',
				'label' => 'Telepon Admin',
				'rules' => 'required|numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'numeric' => '%s hanya berisi angka'
				)
			),
			array(
				'field' => 'email_admin',
				'label' => 'Email Admin',
				'rules' => 'required|valid_email',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'valid_email' => '%s tidak valid'
				)
			),
			array(
				'field' => 'username_admin',
				'label' => 'Username Admin',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric' => '%s hanya berisi kombinasi angka dan huruf'
				)
			),
			array(
				'field' => 'password_admin',
				'label' => 'Password Admin',
				'rules' => 'required|alpha_numeric',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'alpha_numeric' => '%s hanya berisi kombinasi huruf dan angka'
				)
            ),
			array(
				'field' => 'konfpass_admin',
				'label' => 'Password Admin',
				'rules' => 'required|matches[password_admin]',
				'errors' => array(
					'required' => '%s tidak boleh kosong',
					'matches' => '%s tidak sesuai'
				)
			)
		);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><li>', '</li></div>');
		$this->form_validation->set_rules($config);
		// $_POST["password_admin"] = $_POST["konfpass_admin"]= md5($_POST["password_admin"]);

		if ($this->form_validation->run() == FALSE) { 
            $this->load->view('super_admin/spradm_akun_cpage');
            $this->load->view('templates/footer');
		} else {
			$this->add();

			// var_dump($_POST);die();

			// $nama_admin = $_POST["nama_admin"];
			// $nip_admin = $_POST["nip_admin"];
			// $telp_admin = $_POST["telp_admin"];
			// $email_admin = $_POST["email_admin"];
			// $username_admin = $_POST["username_admin"];
			// $password_admin = $_POST["password_admin"];
			// $konfpass_admin = $_POST["konfpass_admin"];

			// $hal_statis 	= isset($_POST["hal_statis"])? $_POST["hal_statis"]: false;
			// $menu 			= isset($_POST["menu"])? $_POST["menu"] : false;
			// $sub_menu 		= isset($_POST["sub_menu"])? $_POST["sub_menu"] : false;
			// $event 			= isset($_POST["event"])? $_POST["event"] : false;
			// $banner 		= isset($_POST["banner"])? $_POST["banner"] : false;
			// $wisata 		= isset($_POST["wisata"])? $_POST["wisata"]: false;
			// $produk 		= isset($_POST["produk"])? $_POST["produk"]: false;
			// $paket_wisata 	= isset($_POST["paket_wisata"])? $_POST["paket_wisata"] : false;
			// $testimoni 		= isset($_POST["testimoni"])? $_POST["testimoni"] : false;
			// $all 			= isset($_POST["all"])? $_POST["all"] : false;


			// $this->db->insert('akun', $_POST);
			// redirect('spradm_sarugo/akun_read');
		}
	} 

	public function add()
	{
			   
			$nama_admin = htmlspecialchars($_POST["nama_admin"]);
			$nip_admin = $_POST["nip_admin"];
			$telp_admin = $_POST["telp_admin"];
			$email_admin = htmlspecialchars($_POST["email_admin"]);
			$username_admin = htmlspecialchars($_POST["username_admin"]);
			$password_admin = htmlspecialchars($_POST["password_admin"]);

			$password_admin = md5($password_admin);
			// $konfpass_admin = $_POST["konfpass_admin"];

			$hal_statis 	= isset($_POST["hal_statis"])? true: false;
			$menu 			= isset($_POST["menu"])? true : false;
			$sub_menu 		= isset($_POST["sub_menu"])? true : false;
			$event 			= isset($_POST["event"])? true : false;
			$banner 		= isset($_POST["banner"])? true : false;
			$wisata 		= isset($_POST["wisata"])? true: false;
			$produk 		= isset($_POST["produk"])? true: false;
			$paket_wisata 	= isset($_POST["paket_wisata"])? true : false;
			$testimoni 		= isset($_POST["testimoni"])? true : false;
			$berita 		= isset($_POST["berita"])? true : false;
			$all 			= isset($_POST["all"])? true : false;


			$admin = array(
				"nama_admin" =>$nama_admin,
				"nip_admin" =>$nip_admin,
				"telp_admin" =>$telp_admin,
				"email_admin" =>$email_admin,
				"username_admin" =>$username_admin,
				"password_admin" =>$password_admin,
				"konfpass_admin" =>$password_admin,
				"level"=>1,
			);

			$this->db->insert('akun', $admin);
			$id_admin = $this->db->get_where("akun",["email_admin"=>$email_admin,"username_admin"=>$username_admin])->result()[0]->id;
			
			$adminAccess = array(
				"id_admin" 		=> $id_admin,
				"hal_statis" 	=> $hal_statis,
				"menu" 			=> $menu,
				"sub_menu" 		=> $sub_menu,
				"event" 		=> $event,
				"banner" 		=> $banner,
				"wisata" 		=> $wisata,
				"paket_wisata" 		=> $paket_wisata,
				"produk" 		=> $produk,
				"testimoni" 	=> $testimoni,
				"berita" 		=> $berita,
				"semua" 		=> $all,
				"superadmin" 	=> true,
			);

			$adminAccess["semua"] = false;
			foreach ($adminAccess as $key => $data) {
				$adminAccess['semua'] = $data;
				if(!$data){
					break;
				}
			} 
			$adminAccess["superadmin"] = false; 

			
			$this->db->insert('access',$adminAccess);

			redirect('spradm_sarugo/akun_read');
	}
    

    public function akun_update($id)
    {
		
        if (isset($_POST['btnSubmit'])) {
			$this->akun_model->nip_admin = $_POST['nip_admin'];
			$this->akun_model->nama_admin = $_POST['nama_admin'];
			$this->akun_model->telp_admin = $_POST['telp_admin'];
            $this->akun_model->email_admin = $_POST['email_admin'];
			$this->akun_model->username_admin = $_POST['username_admin'];
			$this->akun_model->password_admin = $_POST['password_admin'];
			$this->akun_model->update();
			redirect('spradm_sarugo/akun_read');
		} else {
			$query = $this->db->query("SELECT * from akun where nip_admin='$id'");
			$row = $query->row();
			$this->akun_model->nip_admin= $row->nip_admin;
			$this->akun_model->nama_admin = $row->nama_admin;
			$this->akun_model->telp_admin = $row->telp_admin;
            $this->akun_model->email_admin = $row->email_admin;
            $this->akun_model->username_admin = $row->username_admin;
			$this->akun_model->password_admin = $row->password_admin;
			$this->load->view('super_admin/spradm_akun_upage', ['akun_model' => $this->akun_model]);
		}
        $this->load->view('templates/footer');
	}
	
	

    public function akun_find()
    {
        $this->load->view('super_admin/spradm_akun_rpage');
        $this->load->view('templates/footer');
    }

    function akun_delete($id)
	{
		$this->akun_model->nip_admin = $id;
		$this->akun_model->delete();
		redirect('spradm_sarugo/akun_read');
	}

}
?>
