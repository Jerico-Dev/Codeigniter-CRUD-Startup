<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function create(){
		$this->load->view('templates/header');
		$this->load->view('users/create');
		$this->load->view('templates/footer');
	}

	public function create_user()
	{

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('users/create');
			$this->load->view('templates/footer');
		} else {

			$this->user_model->create_user();
			redirect(base_url('/'));	
		}	
	}
	
	public function edit($id)
    {
		$id = $this->uri->segment(3);
        $data = array();
 
        if (empty($id))
        { 
         show_404();
        }else{
		  $data['user'] = $this->user_model->get_users_by_id($id);
		  $this->load->view('templates/header');
		  $this->load->view('users/edit', $data);
		  $this->load->view('templates/footer');
        }
	}

	public function update_user(){
		$this->user_model->update_user();
		redirect('/');
	}

	public function delete_user()
    {
        $id = $this->uri->segment(3);
         
        if (empty($id))
        {
            show_404();
        }
                 
        $users = $this->user_model->delete_user($id);
         
        redirect( base_url('/') );        
    }
	
}
