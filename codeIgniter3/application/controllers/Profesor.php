<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Profesor extends CI_Controller {
function  __construct(){
		parent :: __construct();
		$this->load->helper('form');
		$this->load->model('Codigo_model');
	} 
	function index(){
		$this->Codigo_model->obtenerProfesor();
		$this->load->view('codigo/headers');
		//$this->load->view('profesor1/profesor',$dato);

	}
	function nuevo(){
		$this->load->view('codigo/headers');
		$this->load->view('profesor1/formulario');
	}
	function eliminardatos(){
		$this->Codigo_model->eliminarProfesor();
	}
	function recibirdatos(){
		$data = array(
			'rut' => $this->input->post('rut'),
			'nombre' => $this->input->post('nombre'),
			'profesion' => $this->input->post('profesion')

		);
		$this->Codigo_model->crearProfesor($data);
		$this->load->view('codigo/headers');
		$this->load->view('codigo/bienvenido');
	}

}
?>