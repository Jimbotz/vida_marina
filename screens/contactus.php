
<?php  
if (isset($_POST['usuario']) && isset($_POST['mensaje']) ) {
	include '../db_conn.php';

	$usuario = $_POST['usuario'];
	$mensaje = $_POST['mensaje'];

	if ( empty($mensaje) || empty($usuario) ) {
		echo "Rellena los campos";
	}else {

		$sql = "INSERT INTO contactus(Usuario, mensaje) VALUES('$usuario', '$mensaje')";
		$res = mysqli_query($conn, $sql);

		if (!$res) {
			echo "Your message could not be sent!";
		} else{
			header("Location: ../index.html");
		}
	}

}else {
	header("Location: index.html");
}