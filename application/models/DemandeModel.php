<?php

class DemandeModel extends CI_Model{


    public function get_demandeCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("demandes");
        return $query->result();
    }


    public function insert_demande()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('demandes', $data);
    }


    public function update_demande($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('demandes',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('demandes',$data);
        }        
    }


    public function find_demande($id)
    {
        return $this->db->get_where('demandes', array('id' => $id))->row();
    }


    public function delete_demande($id)
    {
        return $this->db->delete('demandes', array('id' => $id));
    }
}