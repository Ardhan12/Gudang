<?php

class EventModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllEvent()
    {
        $this->db->order_by("id_event","DESC");
        return $this->db->get("event")->result();

    }
    public function getEventByID($id)
    {
        $this->db->where("id_event",$id);
        return $this->db->get("event")->result();
    }

    public function addNewEvent($data)
    {
        $this->db->insert("event",$data);
    }

    public function delete($id)
    {
        $this->db->where("id_event",$id);
        $this->db->delete("event");
    }

    public function update($id,$data)
    {
        $this->db->where("id_event",$id);
        $this->db->update("event",$data);
    }
}