<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->model('welcome_model');
		$data['userdata']= $this->welcome_model->getdata();
        $this->load->view('nandwani.php',$data);
	}

	public function save(){
		$this->load->model('welcome_model');

	
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$number = $this->input->post('phonenumber');
		

		$this->welcome_model->save($address,$email,$number);
		$this->load->view('aftervalidation');

	}

	public function validing(){
		$this->load->model('welcome_model');
		$address = $this->input->post('address');
		$this->welcome_model->validing($address);
        $this->load->view('jatin');
	}


public function update(){
		$this->load->model('welcome_model');
		$address = $this->input->post('address');
		$number = $this->input->post('phonenumber');
		$this->welcome_model->update($address,$number);
	}
 public function display(){
     $this->load->model('welcome_model');
     $this->welcome_model->display($address,$email,$number);
}
}