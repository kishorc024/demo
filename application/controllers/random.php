<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class random extends CI_Controller {
	function __construct(){
        parent:: __construct();
		// $this->load->model('EmployeeModel', 'emp');
		$this->load->helper('string');
		
	}
	public function index()
	{
		$resume = base_url('resumes/'.$resumelink);
        echo $resume;
        exit;
		// $image =  random_string('alnum', 10);
		// echo $image;
	}
}
