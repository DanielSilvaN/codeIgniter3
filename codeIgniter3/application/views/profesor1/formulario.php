<?php
	echo form_open("/Profesor/recibirdatos");
	$rut = array('name' =>'rut','placeholder' => 'escribe tu rut');
	$nombre = array('name' =>'nombre','placeholder' => 'escribe tu nombre');
	$profesion = array('name' =>'profesion','placeholder' => 'escribe tu profesion');

	echo '<div>' . form_label('Rut:','rut') . ' ';
	echo form_input($rut) . '</div>';
	echo '<div>' . form_label('Nombre:','nombre') . ' ';
	echo form_input($nombre) . '</div>';
	echo '<div>' . form_label('Profesion:','profesion') . ' ';
	echo form_input($profesion) . '</div>';
	echo '<div>' . form_submit('','actualizar') . '</div>';
	echo form_close();
?>
</body>
</html>