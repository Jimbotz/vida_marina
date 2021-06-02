<?php
$inc = include("db_conn.php");
if ($inc) {
    $consulta = "SELECT * FROM cliente";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
?>
        <h1>Registro</h1>
        <?php
        while ($row = $resultado->fetch_array()) {
            $id = $row['id'];
            $usuario = $row['Usuario'];
        ?>
            <div >
                
                <div class="container">
                <h2><?php echo $usuario; ?> </h2>
                    <p class="usuario">
                        <b>ID: </b> <?php echo $id ?>  <br>
                        <b>USUARIO: </b> <?php echo $usuario ?>
                    </p>
                </div>
            </div>
<?php
        }
    }
}
?>