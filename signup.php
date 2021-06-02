<?php  
if (isset($_POST['usuario']) && isset($_POST['nombre']) && isset($_POST['password']) ) {
	include 'db_conn.php';

	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$password = $_POST['password'];

	if ( empty($password) || empty($usuario) || empty($nombre) ) {
		echo "Rellena los campos";
	}else {

		$sql = "INSERT INTO cliente(Usuario, Nombre, Contraseña) VALUES('$usuario', '$nombre' , '$password')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("location: index.html");
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}