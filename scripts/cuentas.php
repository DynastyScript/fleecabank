<?php
include 'scripts/conexion.php';
$username = $_SESSION['usuario'];
$query = mysqli_query($con,"SELECT * FROM cuentas WHERE Nombre = '$username'");
 while($row = mysqli_fetch_assoc($query))
 {
 $nombre = $row['Nombre'];
 $admin = $row['Admin'];
 $dinero = $row['Dinero'];
 $impuestos = $row['Impuestos'];
 $acciones = $row['Acciones'];
 $creditos = $row['Creditos'];
 $personaje = $row['Personaje'];
 $servidor = $row['Servidor'];
 $codigo = $row['Codigo'];
 $google = $row['Google'];
 $facebook = $row['Facebook'];
 $instagram = $row['Instagram'];
 $avatarimage = $row['Avatarimage'];


 if($row['Admin'] == 0)
 {
 $admin = 'Usuario';
 }
 else if($row['Admin'] == 1)
 {
 $admin = 'STAFF';
 }
 else if($row['Admin'] == 2)
 {
 $admin = 'Manager';
 }
 else if($row['Admin'] == 20)
 {
 $admin = 'Dueño';
 }

}
?>
