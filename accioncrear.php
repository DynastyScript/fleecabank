<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fleeca - Inicio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<?php
	include 'includes/nav.php';
	include 'scripts/conexion.php'
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	  <div class="row">
	    <ol class="breadcrumb">
	      <li><a href="index.php">
	        <em class="fa fa-home"></em>
	      </a></li>
	      <li class="active">Panel Principal</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Panel Principal</h1>
	    </div>
	  </div><!--/.row-->

	<?php
			$sql="SELECT * from noticias";
			$result=mysqli_query($con,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-heading">[<?php echo $mostrar['categoria'] ?>] <?php echo $mostrar['titulo'] ?></div>
					<div class="panel-body">
						<p><?php echo $mostrar['contenido'] ?> <p><b> <?php echo $mostrar['hora'] ?> |<?php echo $mostrar['fecha'] ?> | <?php echo $mostrar['autor'] ?></b></p></p>
					</div>
				</div>
			</div>

			<?php
			}
			 ?>

			<div class="col-md-7">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Proyecto</div>
					<div class="panel-body">
						<form action="scripts/accionesphp.php" method="post">
							<p>
         <label for="Nombre">First Name:</label>
         <input type="text" name="Nombre" id="Nombre">
      	</p>
     	<p>
         <label for="Contra">Last Name:</label>
         <input type="text" name="Contra" id="Contra">
     	</p>
     	<p>
         <label for="Admin">Email Address:</label>
         <input type="text" name="Admin" id="Admin">
     </p>
     <input type="submit" value="Submit">
						</form>
				</div>
			</div>


			<div class="col-sm-12">
<?php
if ($_SESSION['Admin'] == 1) { ?>
<p class="back-link"><a href="#">Panel de Control</a></p>
<?php } ?>

 ?>

			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

</body>
</html>
