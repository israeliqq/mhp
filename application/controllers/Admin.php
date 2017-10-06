<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Chile/Continental");
	}

	public function index(){
		$ninas=$this->escort_model->getEscort();

		//print_r($datos); exit;

		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu_adm');
		$this->load->view('admin/index', compact('ninas'));
		$this->load->view('plantilla/footer_adm');
	}




}
