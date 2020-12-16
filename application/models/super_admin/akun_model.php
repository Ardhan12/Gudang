<?php
class akun_model extends CI_Model
{
	public $nama_admin;
	public $nip_admin;
	public $telp_admin;
	public $email_admin;
	public $username_admin;
    public $password_admin;
	public $konfpass_admin;
    public $jumlah;

	//array untuk menyimpan label dari masing-masing atribut
	public $label = [];

	//konstruktor model
	public function __construct()
	{
		parent::__construct();
		//$this->labels = $this->_attributelabels();
		//memuat librari database
		$this->load->database();
	}
	/*public function _attributelabels()
	{
		return [
			'id_jenis_kamar' => 'ID Jenis Kamar :',
			'nama_jenis_kamar' => 'Nama Jenis Kamar :',
			'harga_sewa_permalam' => 'Harga :',
			'kapasitas' => 'Kapasitas :',
		];
	}*/
	public function insert()
	{
		$sql = sprintf(
			"INSERT INTO akun VALUES('%s','%s', %d , '%s', '%s', '%s')",
			$this->nip_admin,
			$this->nama_admin,
			$this->telp_admin,
            $this->email_admin,
			$this->username_admin,
            md5($this->password_admin)
            
		);
		$this->db->query($sql);
	}
	public function update()
	{
		
		$sql = sprintf(
			"UPDATE akun SET nama_admin='%s',telp_admin=%d, email_admin='%s', username_admin='%s', password_admin='%s' where nip_admin='%s'",
			$this->nama_admin,
			$this->telp_admin,
            $this->email_admin,
			$this->username_admin,
			$this->password_admin,
			$this->nip_admin
		);
		$this->db->query($sql);
	}
	public function delete()
	{
		$sql = sprintf("DELETE FROM akun WHERE nip_admin='%s'", $this->nip_admin);
		$this->db->query($sql);
	}
	public function read()
	{
		$sql = "SELECT nip_admin, nama_admin, telp_admin, email_admin, username_admin
		from akun WHERE level < 2";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function count()
	{
		// $sql = "SELECT count(nip_admin) as jumlah FROM akun where 'level'<=1";
		// $query = $this->db->query($sql);
		// return $query->result();

		$this->db->where('level <', 2);
		$this->db->from('akun');
		return$this->db->count_all_results(); 
		
	}

}
