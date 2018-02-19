<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome_model extends CI_Model {

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


	public function save($address,$email,$phonenumber){
		$table = "userform";
		$query = "INSERT INTO $table (adress,email,phonenumber) VALUES ('".$address."','".$email."','".$phonenumber."')"; 
		$this->db->query($query);
	}

	public function validing($address){
		$table = "userform";
		$query = "SELECT * FROM $table WHERE adress='".$address."'"; 
		$this->db->query($query);

	}
	public function update($address,$number){
		$table = "userform";
		$query = "UPDATE $table SET phonenumber='".$number."' where adress='".$address."'"; 
        $this->db->query($query);
	
	}

	public function display($address,$email,$number){
		$table = "userform";
  		$query ="SELECT * FROM userform";
	    $this->db->query($query);
	}
	public function getdata(){
		$table = "userform";
  		$query ="SELECT * FROM userform";
	    $resultdata= $this->db->query($query);
	    return $resultdata->result();
	}
}