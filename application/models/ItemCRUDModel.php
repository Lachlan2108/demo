<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('Name', $this->input->get("search"));
          $this->db->or_like('Email', $this->input->get("search")); 
          $this->db->or_like('Number', $this->input->get("search")); 
        }
        $query = $this->db->get('user');
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'Name' => $this->input->post('Name'),
            'Email' => $this->input->post('Email'),
            'Number' => $this->input->post('Number')
        );
        return $this->db->insert('user', $data);
    }


    public function update_item($User_ID) 
    {
        $data=array(
            'Name' => $this->input->post('Name'),
            'Email'=> $this->input->post('Email'),
            'Number'=> $this->input->post('Number')
        );
        if($User_ID==0){
            return $this->db->insert('user',$data);
        }else{
            $this->db->where('User_ID',$User_ID);
            return $this->db->update('user',$data);
        }        
    }


    public function find_item($User_ID)
    {
        return $this->db->get_where('user', array('User_ID' => $User_ID))->row();
    }


    public function delete_item($User_ID)
    {
        return $this->db->delete('user', array('User_ID' => $User_ID));
    }
}
?>