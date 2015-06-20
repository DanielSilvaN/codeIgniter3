<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Controlador extends CI_Controller {
	function  __construct(){
		parent :: __construct();
		$this->load->helper('form');
		$this->load->model('Codigo_model');
	} 


 	function index(){
	$this->load->library('menu',array('inicio','cursos'));
	$data['mi_menu']=$this->menu->contruirMenu();
	$this->load->view('codigo/headers');
	$this->load->view('codigo/bienvenido',$data);
	}
	function nuevo(){
		$this->load->view('codigo/headers');
		$this->load->view('codigo/formulario');
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