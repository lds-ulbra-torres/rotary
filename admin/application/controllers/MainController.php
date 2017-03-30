<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
		$data['categorys'] = $this->CategoriaModel->getCategories();
		$this->template->load('template/template','main/mainView',$data);		
	}


	public function rotaryData(){
		$categories = $this->CategoriaModel->getCategories();
		for($i = 0; $i< count($categories); $i++) {
			$categories[$i]['itens'] = $this->ItensModel->getItensByCategory($categories[$i]['category_id']);
		}
		header("Content-Type: application/json");	
		echo json_encode($categories);
	}
}

/* End of file mainController.php */
/* Location: ./application/controllers/mainController.php */