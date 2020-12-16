<?php

class HalamanStatisModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function add($dataMentah)
    {
        $data = array(
            "judul":$dataMentah["judul"],
            "isi":$dataMentah["isi"],
            "gambar":$dataMentah["gambar"],
            "judul":$dataMentah["judul"]

        );
        $this->db->insert('hal_statis', $data);
        
    }

    
}