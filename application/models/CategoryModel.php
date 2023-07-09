<?php

class CategoryModel extends CI_Model{


    public function get_categoryCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("categories");
        return $query->result();
    }


    public function insert_category()
    {     
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('categories', $data);
    }


    public function update_category($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('categories',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('categories',$data);
        }        
    }


    public function find_category($id)
    {
        return $this->db->get_where('categories', array('id' => $id))->row();
    }


    public function delete_category($id)
    {
        return $this->db->delete('categories', array('id' => $id));
    }
}