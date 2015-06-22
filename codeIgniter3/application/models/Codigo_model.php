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



$db1=new mysqli("127.0.0.1","root","","uvmovil");
	if($db1->connect_error)
		echo "error";

$consulta = "SELECT * FROM usuarioProfesor";

$resultado = $db1-> query($consulta);

$numerosfilas=$resultado->num_rows;
echo "el numero de elementos es " .$numerosfilas;
echo " <br>";

echo "<span style='color: blue;'>Extracción de todas las filas ...</span>";
echo "<br> ";
for($x=0;$x<$numerosfilas;$x++){
	$fila = $resultado->fetch_object();
	echo "<tr>";
	echo "<td>".$fila->nombreProfesor."</td>";
	echo "<td>".$fila->rutProfesor."</td>";
	echo "<td>".$fila->profesionProfesor."</td>";
	echo "</tr>";
	echo "<br> ";
//while($file = $resultado -> fbsql_fetch_row() ){

//echo "nombre: " . $fila["nombreProfesor"] . "";

//echo "Profesion: " . $fila["profesionProfesor"] . "<hr>";

}
//$fila->nombre_campo;

//<html>
//<thead>
//<tr>
//<td>ISBN</td>
//<td>T&iacute;tulo</td>
//<td>Fecha</td></tr>
//</thead>
 
//<?php 	
//for ($x=0;$x<$numfilas;$x++) {
//	$fila = $result->fetch_object();
//	echo "<tr>";
//	echo "<td>".$fila->nombreProfesor."</td>";
//	echo "<td>".$fila->rutProfesor."</td>";
//	echo "<td>".$fila->profesionProfesor."</td>";
//	echo "</tr>";
//}
//


}
function eliminarProfesor(){


	$this->db->query("delete from usuarioProfesor where nombreProfesor = 'daniel'");

}

}
?>