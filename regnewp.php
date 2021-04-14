<?php
include("conexion.php");

if(isset($_POST['send'])){

	if(strlen($_POST['nombre']) >= 1 &&
   	  
	   strlen($_POST['correo']) >= 1 &&

	   strlen($_POST['producto']) >= 1 &&
	   		 
	   strlen($_POST['direccion']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$producto = trim($_POST['producto']);
		$direccion = trim($_POST['direccion']);
		$consulta = "INSERT INTO newp(nombre, correo, producto, direccion) VALUES ('$nombre', '$correo', '$producto', '$direccion')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<h3 class="ok">VEREMOS SI SERA SELECCIONADO PARA OPTAR POR ESTE</h3>
<?php
		} else {
			?>
	<h3 class="bad">HA OCURRIDO UN ERROR</h3>
			
			<?php
			}
		} else {
		
              ?>
<h3 class="bad">PORFAVOR COMPLETE LOS CAMPOS</h3>
			<?php
			
		}
		
}
	



?>


