<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->library('database','session');
		
	}
	public function index()
	{
		$result['data']= $this->db->get('department')->result_array();
		$this->load->view('registration.php',$result);
	}
	public function insertData(){
		$hobbies = implode(',',html_escape($this->security->xss_clean($this->input->post('hob'))));
		$data = array(
			'name' => html_escape($this->security->xss_clean($this->input->post('name'))),
			'salary'=> html_escape($this->security->xss_clean($this->input->post('sal'))),
			'hobbies' => $hobbies,
			'dept_id' => html_escape($this->security->xss_clean($this->input->post('dept'))),
			'gender' => html_escape($this->security->xss_clean($this->input->post('gen'))),
		);
		$response = $this->user_model->insertData($data);
		if($response){
			echo 1;
		}else{
			echo 0;
		}
	}
	public function reports(){
		$result = $this->user_model->reportData();
		$this->load->view('reports',$result);
	}
}
