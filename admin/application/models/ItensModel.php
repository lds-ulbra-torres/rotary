<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItensModel extends CI_Model {

	private $table="itens";

	public function getItensByCategory($id){
		$this->db->where('item_category',$id);
		return $this->db->get($this->table)->result_array();
	}	

	public function addItem($data){
		$this->db->insert($this->table,$data);
	}

	public function getItens(){
		return $this->db->get($this->table)->result_array();
	}

	public function deletItem($id){
		$this->db->where('item_id',$id);
		$this->db->delete($this->table);
	}

	public function getItemByID($id){
		$this->db->where('item_id',$id);
		return $this->db->get($this->table)->result_array();	
	}
	
	public function updateItem($id,$data){
		$this->db->where('item_id',$id);
		$this->db->update($this->table,$data);
	}
}

/* End of file ItensModel.php */
/* Location: ./application/models/ItensModel.php */