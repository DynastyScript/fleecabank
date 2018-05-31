<?php
include('scripts/conexion.php') ?>
<?php
$link = mysqli_connect("localhost", "root", "", "mazebank");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$categoria = mysqli_real_escape_string($link, $_REQUEST['categoria']);
$titulo = mysqli_real_escape_string($link, $_REQUEST['titulo']);
$contenido = mysqli_real_escape_string($link, $_REQUEST['contenido']);
$fecha = mysqli_real_escape_string($link, $_REQUEST['fecha']);
$hora = mysqli_real_escape_string($link, $_REQUEST['hora']);
$autor = mysqli_real_escape_string($link, $_REQUEST['autor']);

$sql = "INSERT INTO noticias (categoria, titulo, contenido, fecha, hora, autor) VALUES ('$categoria', '$titulo', '$contenido', '$fecha', '$hora', '$autor')";
if(mysqli_query($link, $sql)){
} else{
    echo "$sql. " . mysqli_error($link);
}

header("location: index.php");


mysqli_close($link);
?>
