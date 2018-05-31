<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fleeca - Acciones</title>
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
	      <li class="active">Perfil</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Perfil</h1>
	    </div>
	  </div><!--/.row-->



		<div class="col-md-3">
						<div class="panel panel-info">

							<div class="panel-body">

						      <img src="<?php echo $avatarimage; ?>" class="img-responsive" alt="" width="300">

							</div>
						</div>
					</div>
					<div class="col-md-9">
									<div class="panel panel-danger">
										<div class="panel-heading">Información</div>
										<div class="panel-body">
											<p><b>Nombre:</b> <?php echo $nombre; ?></p>
											<p><b>Dinero:</b> <?php echo $dinero; ?> $</p>
											<p><b>Impuestos:</b> <?php echo $impuestos; ?> %</p>
											<p><b>Personaje:</b> <?php echo $personaje; ?></p>
											<p><b>Servidor:</b> <?php echo $servidor; ?></p>
											<p><b>Codigo:</b> <?php echo $codigo; ?></p>
											<p><b>Url Avatar:</b> <?php echo $avatarimage; ?></p>
											<a class="btn btn-danger btn-lg" rel="publisher"
											 href="<?php echo $google; ?>">
												<i class="fa fa-google-plus"></i>
										</a>
										<a class="btn btn-primary btn-lg" rel="publisher"
												 href="<?php echo $facebook; ?>">
													<i class="fa fa-facebook-f"></i>
											</a>
										<a class="btn btn-warning btn-lg" rel="publisher"
											 href="<?php echo $instagram; ?>">
												<i class="fa fa-instagram"></i>
										</a>



										</div>
									</div>
								</div>
								<div class="col-md-12">
												<div class="panel panel-success">
													<div class="panel-heading">Soporte</div>
													<div class="panel-body">



													</div>
												</div>
											</div>


			<div class="col-sm-12">
				<p class="back-link"><a href="#">Panel de Control</a></p>
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
