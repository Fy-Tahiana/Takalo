<?php

class UserModel extends CI_Model{


    public function get_userCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("users");
        return $query->result();
    }


    public function insert_user()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('users', $data);
    }


    public function update_user($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('users',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('users',$data);
        }        
    }


    public function find_user($id)
    {
        return $this->db->get_where('users', array('id' => $id))->row();
    }


    public function delete_user($id)
    {
        return $this->db->delete('users', array('id' => $id));
    }
}