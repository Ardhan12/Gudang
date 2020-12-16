<?php
class StaticPageModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function add($judul,$isi,$gambar,$tampilkanKeBeranda)
    {
        $data= array(
            "judul"=>$judul,
            "isi"   => $isi,
            "gambar"=> $gambar,
            "add_to_beranda" => $tampilkanKeBeranda,
        );

        $this->db->insert("hal_statis",$data);
    }

    public function getAllStaticPage()
    {
        return $this->db->get("hal_statis")->result();
    }

    public function getDataByID($id)
    {
        return $this->db->get_where("hal_statis",["id"=>$id])->result();
    }
    public function getDataByTitle($title)
    {
        return $this->db->get_where("hal_statis",["judul"=>$title])->result();
    }

    // update data
    public function update($id,$data)
    {
       $this->db->where("id",$id);
       $this->db->update("hal_statis",$data);
    }

    // delete data from database
    public function delete($id)
    {
        $this->db->where("id",$id);
        $this->db->delete("hal_statis");
    }

    // fungsi untuk mengambil semua judul halaman statis
    public function getAllTitle()
    {
        $this->db->select("judul");
        return $this->db->get("hal_statis")->result();
    }
}