<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('Name', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("Name");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('Name', $data);
    }


    public function update_item($User_ID) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($User_ID==0){
            return $this->db->insert('Name',$data);
        }else{
            $this->db->where('User_ID',$User_ID);
            return $this->db->update('Name',$data);
        }        
    }


    public function find_item($User_ID)
    {
        return $this->db->get_where('Name', array('User_ID' => $User_ID))->row();
    }


    public function delete_item($User_ID)
    {
        return $this->db->delete('Name', array('User_ID' => $User_ID));
    }
}
?>