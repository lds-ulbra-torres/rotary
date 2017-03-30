<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryController extends CI_Controller {

	/*public function index()
	{
		
	}*/


	public function newCategory(){

		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('desc', 'Username', 'required');


		if ($this->form_validation->run()) {

			$config['upload_path']          = './imgs/';
			$config['allowed_types']        = 'jpg|png';
			$config['max_size']             = '100000';
			$extensao = pathinfo($_FILES['userfile']['name']);
			$extensao = ".".$extensao['extension'];
			$_FILES['userfile']['name'] = time().uniqid(md5(9999999)).$extensao;

			$this->load->library('upload', $config);

			$this->upload->initialize($config);		

			if($this->upload->do_upload('userfile')){
				$this->upload->initialize($config);		
				$data =  array( 
					'category_name' 			=> $this->input->post('name'),
					'category_description'		=> $this->input->post('desc'),
					'category_icon_path'		=> $_FILES['userfile']['name']
					);
				$this->CategoriaModel->addCategory($data);
				redirect(site_url());
			}	
		}else{
			$this->template->load('template/template','categoria/newCategoryView');
		}
	}

	public function deletCategory($id,$img){
		$this->CategoriaModel->deleteCategory($id);
		$path_to_file = "imgs/".$img;
		unlink($path_to_file);
		redirect(site_url());
	}	

	public function updateCategory($id){

		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('date', 'Username', 'required');
		$this->form_validation->set_rules('desc', 'Username', 'required');

		if ($this->form_validation->run()) {
			$data =  array( 'category_name' 			=> $this->input->post('name'),
				'category_description'		=> $this->input->post('desc'),
				'category_updated_at'		=> $this->input->post('date')
				);
			$this->CategoriaModel->updateCategory($id,$data);
			redirect('','refresh');
		}else{
			$data['dados'] = $this->CategoriaModel->getCategoryByID($id);
			$this->template->load('template/template','categoria/updateCategoryView',$data);
		}
	}

}

/* End of file categoryController.php */
/* Location: ./application/controllers/categoryController.php */