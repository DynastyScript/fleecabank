<?php
$link = mysqli_connect("localhost", "root", "", "mazebank");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Empresa = mysqli_real_escape_string($link, $_REQUEST['Empresa']);
$Acciones = mysqli_real_escape_string($link, $_REQUEST['Acciones']);
$Usuario = mysqli_real_escape_string($link, $_REQUEST['Usuario']);
$Fecha = mysqli_real_escape_string($link, $_REQUEST['Fecha']);
$Estado = mysqli_real_escape_string($link, $_REQUEST['Estado']);
$Color = mysqli_real_escape_string($link, $_REQUEST['Color']);
$Descripcion = mysqli_real_escape_string($link, $_REQUEST['Descripcion']);

$sql = "INSERT INTO acciones (Empresa, Acciones, Usuario, Fecha, Estado, Color, Descripcion) VALUES ('$Empresa', '$Acciones', '$Usuario', '$Fecha', '$Estado', '$Color', '$Descripcion')";
if(mysqli_query($link, $sql)){
} else{
    echo "$sql. " . mysqli_error($link);
}

header("location: index.php");


mysqli_close($link);
?>
