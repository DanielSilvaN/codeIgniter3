<?php defined('BASEPATH') OR exit('No direct script access allowed');
class codigo_model extends CI_Model{
	function  __construct(){
		parent :: __construct();
		$this->load->database();
	}
function creaRProfesor($data){
	
	$this->db->insert('usuarioProfesor',array('rutProfesor'=>$data['rut'],'nombreProfesor'=>$data['nombre'],'profesionProfesor'=>$data['profesion']));
		
}
function obtenerProfesor(){
	#Extraer todas las filas

$consulta = "SELECT * FROM usuarioProfesor";

$resultado = $this-> db-> query($consulta);

echo "<span style='color: blue;'>Extracción de todas las filas ...</span>";

while($file = $resultado -> fetch_array() ){

echo "nombre: " . $fila["nombreProfesor"] . "";

echo "Profesion: " . $fila["profesionProfesor"] . "<hr>";

}


}
function eliminarProfesor(){


	$this->db->query("delete from usuarioProfesor where nombreProfesor = 'daniel'");

}

}
?>