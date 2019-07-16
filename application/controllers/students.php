<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
	function __construct(){
        parent:: __construct();
		 //$this->load->model('EmployeeModel', 'emp');
		
	}
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('students');
		$this->load->view('layout/footer');
	}
	public function students()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('students');
		$this->load->view('layout/footer');
	}
	public function employees()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('employees');
		$this->load->view('layout/footer');
	}
	public function employee()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('employee');
		$this->load->view('layout/footer');
	}
}
