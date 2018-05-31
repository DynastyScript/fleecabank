<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fleeca - Empresas</title>
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
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	  <div class="row">
	    <ol class="breadcrumb">
	      <li><a href="index.php">
	        <em class="fa fa-home"></em>
	      </a></li>
	      <li class="active">Empresas</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Empresas</h1>
	    </div>
	  </div><!--/.row-->

		<div class="col-md-12">
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay">Solicitud</div>
					<div class="panel-body">
						<p>Si tienes una empresa/negocio/local y quieres vender tus acciones y ganar dinero cada vez que compren tus acciones , debes rellenar el formulario de solicitud , completando todos los campos.</p>

					</div>
				</div>
			</div>


							<?php
							$sql="SELECT * from empresas";
							$result=mysqli_query($con,$sql);

							while($mostrar=mysqli_fetch_array($result)){
							 ?>
							<div class="col-md-4">
											<div class="panel panel-<?php echo $mostrar['color'] ?>">
												<div class="panel-heading"><?php echo $mostrar['nombre'] ?></div>
												<div class="panel-body">
													<center><p>Acciones Disponibles: <b><?php echo $mostrar['acciones'] ?></b></p></center>
													<center><p>Encargado: <b><?php echo $mostrar['encargado'] ?></b></p></center>
													<center><p>Precio: <b><?php echo $mostrar['precio'] ?>$</b></p></center>
												  <center><p>Estado: <b><?php echo $mostrar['estado'] ?></b></p></center>

												</div>
											</div>
										</div>

										<?php
										}
										 ?>


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
