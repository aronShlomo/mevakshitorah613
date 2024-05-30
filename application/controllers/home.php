<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {



public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('form_validation');
	//Do your magic here
}	

	public function index()
	{
		$this->load->view('home');
	}


	public function about(){
		$this->load->view('rabbi');
	}

    
	public function daven()
	{
		$this->load->view('daven');
	}


	public function donate(){
		$this->load->view('donate');
	}


	public function donatebtn(){
        $this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('money', 'Money', 'required');

		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('error', 'All fields are required');
			return redirect('home/donate');
		}

		$data = $this->input->post();
		$this->load->model('donate');
		$donation = $this->donate->insert($data);
		if($donation){  
			// $this->session->set_flashdata('donation', 'Thank you for your donation');
			 return redirect('https://www.paypal.com/signin');

		}




		
		
	}




}