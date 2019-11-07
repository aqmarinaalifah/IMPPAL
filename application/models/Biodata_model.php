<?php

class Biodata_model extends CI_Model
{
	public function bio()
    {
        'a' = $this->session->userdata('nama');

        $query = $this->db->select("*")
                 ->from('biodata')
                 ->where('nama' )
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("biodata", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    // public function edit($id_user)
    // {

    //     $query = $this->db->where("id_user", $id_user)
    //             ->get("user");

    //     if($query){
    //         return $query->row();
    //     }else{
    //         return false;
    //     }

    // }

    // public function update($data, $id)
    // {

    //     $query = $this->db->update("user", $data, $id);

    //     if($query){
    //         return true;
    //     }else{
    //         return false;
    //     }

    // }

    // public function hapus($id)
    // {

    //     $query = $this->db->delete("user", $id);

    //     if($query){
    //         return true;
    //     }else{
    //         return false;
    //     }

    // }



}

?>