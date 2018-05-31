<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fleeca - Changelog</title>
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
	      <li class="active">Changelog</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Changelog</h1>
	    </div>
	  </div><!--/.row-->

		<div class="col-md-12">
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay">Changelog</div>
					<div class="panel-body">
						<p>Los changelog son las actualizaciones en la pagina web o futuras actualizaciones que daran al cabo , tambien nuevas normas entre otras.</p>

					</div>
				</div>
			</div>


							<?php
							$sql="SELECT * from changelog";
							$result=mysqli_query($con,$sql);

							while($mostrar=mysqli_fetch_array($result)){
							 ?>
							<div class="col-md-12">
											<div class="panel panel-primary">
												<div class="panel-heading"><center><?php echo $mostrar['fecha'] ?>(<?php echo $mostrar['autor'] ?>)</center></div>
												<div class="panel-body">
													<p><b><?php echo $mostrar['descripcion'] ?></b></p>
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
