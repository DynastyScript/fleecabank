
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
	include 'includes/nav2.php';
	?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	  <div class="row">
	    <ol class="breadcrumb">
	      <li><a href="index.php">
	        <em class="fa fa-home"></em>
	      </a></li>
	      <li class="active">Panel Admin</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Panel Admin</h1>
	    </div>
	  </div><!--/.row-->



		<div class="col-md-6">
						<div class="panel panel-red">
							<div class="panel-heading dark-overlay">Aviso</div>
							<div class="panel-body">
								<p>El mal uso del panel administrativo es sancionable , todas las transferencias de dinero , acciones , creditos o al editar cuentas o acciones u noticias quedaran guardadas , tened cuidado con el uso del panel. Leer todas las normas antes de su uso.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
							<div class="panel panel-teal">
								<div class="panel-heading dark-overlay">Normas</div>
								<div class="panel-body">
									<ul type= disc>
									<li> Cuando se piden prestamos o reembolso del dinero para abusar de dicho servicio la cuenta sera bloqueada.
									<li> La transferencia de acciones o dinero por vía de multi-cuentas sera sancionado.
									<li> La venta de cuentas con creditos o dinero queda totalmente prohibido.
									<li> Los creditos una vez comprados o solicitados no podran ser vendidos o reembolsados.
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading">Primary Panel</div>
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>

			<div class="col-sm-12">
				<p class="back-link"><a href="index.php">INICIO</a></p>
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
