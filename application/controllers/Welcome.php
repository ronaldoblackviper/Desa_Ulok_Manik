<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('Desain/index.html');
	}
	public function about()
	{
		$this->load->view('Desain/about.html');
	}
	public function blog()
	{
		$this->load->view('Desain/blog.html');
	}
	public function contact()
	{
		$this->load->view('Desain/contact.html');
	}
	public function portfolio()
	{
		$this->load->view('Desain/portfolio.html');
	}
	public function service()
	{
		$this->load->view('Desain/services.html');
	}
}
