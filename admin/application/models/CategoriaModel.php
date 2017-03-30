<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriaModel extends CI_Model {

	private $table = "categories"; 
	
	public function addCategory($data){
		$this->db->insert($this->table,$data);
	}

	public function getCategories(){
		return $this->db->get($this->table)->result_array();
	}

	public function deleteCategory($id){
		$this->db->where('category_id',$id);
		$this->db->delete($this->table);
	}

	public function getCategoryByID($id){
		$this->db->where('category_id',$id);
		return $this->db->get($this->table)->result_array();	
	}
	
	public function updateCategory($id,$data){
		$this->db->where('category_id',$id);
		$this->db->update($this->table,$data);
	}

	public function getRotaryData(){
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->join('itens', 'categories.category_id = itens.item_category');
		return $this->db->get()->result_array();

	}
}

/* End of file CategoriaModel.php */
/* Location: ./application/models/CategoriaModel.php */