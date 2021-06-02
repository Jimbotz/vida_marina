<?php
include('db_conn.php');
$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;

$consulta = "SELECT*FROM cliente where Usuario='$usuario' and Contraseña='$password'";
$resultado = mysqli_query($conn, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {

    header("location:./screens/home.html");
} else {
?>
    <?php
    include("index.html");

    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
