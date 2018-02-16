<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = 'Report';
		$data['content'] = 'Reports Project';
		$this->load->view('welcome_message',$data);
	}

	public function save(){
		$this->load->model('welcome_model');

		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$number = $this->input->post('phonenumber');
		

		$this->welcome_model->save($name,$address,$email,$number);
		$this->load->view('aftervalidation');

	}

}