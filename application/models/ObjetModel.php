<?php

class ObjetModel extends CI_Model{


    public function get_objetCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("objets");
        return $query->result();
    }


    public function insert_objet()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('objets', $data);
    }


    public function update_objet($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('objets',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('objets',$data);
        }        
    }


    public function find_objet($id)
    {
        return $this->db->get_where('objets', array('id' => $id))->row();
    }


    public function delete_objet($id)
    {
        return $this->db->delete('objets', array('id' => $id));
    }
}