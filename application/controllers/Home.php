<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/index');
		$this->load->view('plantilla/footer');
	}

	public function mapa(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/mapa');
		$this->load->view('plantilla/footer');
	}

	public function servicios(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/servicios');
		$this->load->view('plantilla/footer');
	}

	public function todas(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/todas');
		$this->load->view('plantilla/footer');
	}


	public function perfil(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/perfil');
		$this->load->view('plantilla/footer');
	}

	public function contacto(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/contacto');
		$this->load->view('plantilla/footer');
	}



	public function error(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/error');
		$this->load->view('plantilla/footer');
	}


}
