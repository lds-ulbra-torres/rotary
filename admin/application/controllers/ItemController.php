<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ItemController extends CI_Controller {

	public function index($num)
	{
		$data['itens'] = $this->ItensModel->getItensByCategory($num);
		$data['id_category'] = $num;
		$this->template->load('template/template','itens/mainItensView', $data);		
	}

	public function newItem($num){

		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('id_category', 'ID', 'required');
		$this->form_validation->set_rules('resumo', 'resumo', 'required');
		$this->form_validation->set_rules('citacao', 'citacao', 'required');


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
					'item_name' 			=> $this->input->post('name'),
					'item_title' 			=> $this->input->post('title'),
					'item_description'		=> $this->input->post('desc'),
					'item_abstract'			=> $this->input->post('resumo'),
					'item_quote'		    => $this->input->post('citacao'),
					'item_image_path'		=> $_FILES['userfile']['name'],
					'item_category'			=> $this->input->post('id_category')
					);
				$this->ItensModel->addItem($data);
				$link = "itens/".$num;
				redirect($link,'refresh');
			}	
		}else{
			$data['id_category'] = $num;
			$this->template->load('template/template','itens/newItemView', $data);
		}
	}


	public function deletItem($id,$img,$id_cate){
		$path_to_file = "imgs/".$img;
		unlink($path_to_file);
		$this->ItensModel->deletItem($id);

		redirect('itens'.'/'.$id_cate,'refresh');
	}

	public function updateItem($id,$id_cate){

		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('desc', 'Desc', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('resumo', 'resumo', 'required');
		$this->form_validation->set_rules('citacao', 'citacao', 'required');
		$this->form_validation->set_rules('id_category', 'ID', 'required');

		if ($this->form_validation->run()) {
				$data =  array( 
					'item_name' 			=> $this->input->post('name'),
					'item_title' 			=> $this->input->post('name'),
					'item_description'		=> $this->input->post('desc'),
					'item_abstract'			=> $this->input->post('resumo'),
					'item_quote'		    => $this->input->post('citacao'),
					'item_category'			=> $this->input->post('id_category')
					);
			$this->ItensModel->updateItem($id,$data);
			redirect('itens'.'/'.$id_cate,'refresh');
		}else{
			$data['dados'] = $this->ItensModel->getItemByID($id);
			$data['id_category'] = $id_cate;
			$this->template->load('template/template','itens/updateItemView',$data);
		}
	}
}
