<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		date_default_timezone_set("Chile/Continental");
	}

	public function index(){

    
		if($this->input->post('agregar',true))
        {
        	$escort=array
     		(
                'NOMBRE'=>strtoupper($this->input->post('nombre',true)),
                'NACIONALIDAD'=>strtoupper($this->input->post('nacionalidad',true)),
                'RAZA'=>strtoupper($this->input->post('raza',true)),
                'EDAD'=>strtoupper($this->input->post('edad',true)),
                'ESTATURA'=>strtoupper($this->input->post('estatura',true)),
                'MEDIDAS'=>strtoupper($this->input->post('medidas',true)),
                'PESO'=>strtoupper($this->input->post('peso',true)),
                'TELEFONO'=>strtoupper($this->input->post('telefono',true)),
                'DIRECCION'=>strtoupper($this->input->post('direccion',true)),
                'CIUDAD'=>strtoupper($this->input->post('ciudad',true)),
                'RESENA'=>strtoupper($this->input->post('resena',true)),
                'VALOR'=>strtoupper($this->input->post('valor',true)),
                'HORA_I'=>strtoupper($this->input->post('entrada',true)),
                'HORA_F'=>strtoupper($this->input->post('salida',true)),
                'CLASIFICACION'=>strtoupper($this->input->post('clasificacion',true)),
                'RETOQUE'=>strtoupper($this->input->post('retoque',true)),
            );
            $this->escort_model->InsertEscort($escort);
            
        }

      

       

        if($this->input->post('actualizar',true))
        {
            $id = $this->input->post('id',true);
            $escort=array
            (
                'NOMBRE'=>strtoupper($this->input->post('nombre',true)),
                'NACIONALIDAD'=>strtoupper($this->input->post('nacionalidad',true)),
                'RAZA'=>strtoupper($this->input->post('raza',true)),
                'EDAD'=>strtoupper($this->input->post('edad',true)),
                'ESTATURA'=>strtoupper($this->input->post('estatura',true)),
                'MEDIDAS'=>strtoupper($this->input->post('medidas',true)),
                'PESO'=>strtoupper($this->input->post('peso',true)),
                'TELEFONO'=>strtoupper($this->input->post('telefono',true)),
                'DIRECCION'=>strtoupper($this->input->post('direccion',true)),
                'CIUDAD'=>strtoupper($this->input->post('ciudad',true)),
                'RESENA'=>strtoupper($this->input->post('resena',true)),
                'VALOR'=>strtoupper($this->input->post('valor',true)),
                'HORA_I'=>strtoupper($this->input->post('entrada',true)),
                'HORA_F'=>strtoupper($this->input->post('salida',true)),
                'CLASIFICACION'=>strtoupper($this->input->post('clasificacion',true)),
                'RETOQUE'=>strtoupper($this->input->post('retoque',true)),
            );
            $this->escort_model->UpdateEscort($escort,$id);
        }


		$ninas=$this->escort_model->GetEscort();

		//print_r($datos); exit;

		$this->load->view('plantilla/header');
		$this->load->view('plantilla/menu_adm');
		$this->load->view('admin/index', compact('ninas'));
		$this->load->view('plantilla/footer_adm');
	}

	public function delete($id)
	{
        $this->escort_model->DeleteEscort($id);
        redirect(base_url()."admin");
	}

    public function deletePhoto($idFoto, $id)
    {
        $this->escort_model->deletePhoto($idFoto);
        redirect(base_url()."admin/info?id=".$id);
    }



    public function info()
    {
        $id = $this->input->get('id');
        $escort = $this->escort_model->GetEscortID($id);

        $fotos = $this->escort_model->GetFotos($id);

        $this->load->view('plantilla/header');
        $this->load->view('plantilla/menu_adm');
        $this->load->view('admin/info',compact('id','escort','fotos'));
        $this->load->view('plantilla/footer_adm');
        
    }


    function upload()
    {
        $config['upload_path'] = "tool/fotos";
        $config['encrypt_name'] = true;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size'] = "50000";
        //$config['max_width'] = "2000";
        //$config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if(! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo "ERROR: YA LA CAGASTE"; exit;
            
        }

        $id = $this->input->post('id');
        $ima = $this->upload->data();
        $nombreimg = $ima['file_name'];

        $foto=array
        (
            'PRIORIDAD'=>'1',
            'RUTA'=>$nombreimg,
            'MOSTRAR'=>1,
            'FK_ESCORT'=>$id,
        );

        $this->escort_model->InsertFoto($foto);

        redirect(base_url()."admin/info?id=".$id);
    }



}
