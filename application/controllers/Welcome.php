<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('Desain/HalamanUtama.html');
	}
	public function Hasilbumi()
	{
		$this->load->view('Desain/HasilBumi.html');
	}
	public function Petadesa()
	{
		$this->load->view('Desain/PetaDesa.html');
	}
	public function Sejarahdesa()
	{
		$this->load->view('Desain/SejarahDesa.html');
	}
	public function Strukturdesa()
	{
		$this->load->view('Desain/StrukturDesa.html');
	}
	public function Wisatadesa()
	{
		$this->load->view('Desain/WisataDesa.html');
	}
}
