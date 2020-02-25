<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result();
	}

	public function create_user()
	{
	
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
		);

		return $this->db->insert('users', $data);
	}

	public function get_users_by_id($id)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row();
	}
	
	public function update_user(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'description' => $this->input->post('description'),
		);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('users', $data);
	}

	public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
	
}
