<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function error(){
		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu');
		$this->load->view('home/error');
		$this->load->view('plantilla/footer');
	}




}
