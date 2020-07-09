<?php 
defined('BASEPATH') OR exit('NO direct ');
class Data_model extends CI_Model {

    public function input_data($table,$data){
		$query = $this->db->insert($table,$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	
	public function get_bagian(){
		$query = $this->db->select("*")->from("bagian")->get();
		return $query->result();
	}
	public function get_level(){
		$query = $this->db->select("*")->from("level")->get();
		return $query->result();
	}
 
	public function login($table, $where){
		return $this->db->get_where($table, $where);
	}
}
?>