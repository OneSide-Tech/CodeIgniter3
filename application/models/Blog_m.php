<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{

    public function getBlog(){
        $this->db->order_by('bpdate', 'desc');//Sort the database column in descending
        $query = $this->db->get('records'); //The query() function returns a database result object when “read” type queries are run, which you can use to show your results. 
                                            //When “write” type queries are run it simply returns TRUE or FALSE depending on success or failure.
                                            //When retrieving data you will typically assign the query to your own variable,
        if($query->num_rows() > 0){         //Return $result if $query data rows is not 0 or greater than 0 
            return $query->result();
        }else{
            return false;
        }
    }
    public function submit(){
        $field = array(
            'bpauthor' => $this->input->post('txtauthor'),
            'bpcategory' => $this->input->post('txtcategory'),
            'bptitle' => $this->input->post('txttitle'),
            'bpdate' => $this->input->post('txtdate'),
            'message' => $this->input->post('txtcomment'),
        );
        $this->db->insert('records', $field);
        if($this->db->affected_rows() > 0 ){
            return true;
        }else{
            return false;
        }
    }
    
	public function getBlogById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('records');
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function update(){
        $id = $this->input->post('txt_hidden_id');
        $field = array(
            'bpauthor' => $this->input->post('txtauthor'),
            'bpcategory' => $this->input->post('txtcategory'),
            'bptitle' => $this->input->post('txttitle'),
            'bpdate' => $this->input->post('txtdate'),
            'message' => $this->input->post('txtcomment'),
        );
        // $field = array(
        //     'bpauthor' => "lopez",
        //     'bpcategory' => "boxing",
        //     'bptitle' => "World",
        //     'bpdate' => "date",
        //     'message' => "weak",
        // );
        
        $this->db->where('id', $id);
        $this->db->update('records', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('records');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}