<?php 

class Bathroom extends CI_Controller{

	function __construct()
	{
		parent:: __construct();

	}

	function index(){

		$this->load->view('template/header');
		$this->load->view('landing/index');
		$this->load->view('template/footer');
	}

	function produk(){

		$this->load->view('template/header');
		$this->load->view('landing/produk');
		$this->load->view('template/footer');
	}

	function produk_kitchen(){

		$this->load->view('template/header');
		$this->load->view('landing/produk_kitchen');
		$this->load->view('template/footer');

	}



}
?>