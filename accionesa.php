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
	      <li class="active">Vender Acciones</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Vender Acciones</h1>
	    </div>
	  </div><!--/.row-->




						<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">Enviar Acciones</div>
						<div class="panel-body">

							<form action="accionesphp.php" method="post">
							<div class="form-group">
									<label>Empresa</label>
									<input class="form-control" placeholder="Nombre de la Empresa" id="Empresa" name="Empresa">
								</div>

								<div class="form-group">
									<label>Acciones</label>
									<input class="form-control" placeholder="Acciones Compradas" id="Acciones" name="Acciones">
								</div>

								<div class="form-group">
									<label>Usuario</label>
									<input class="form-control" placeholder="Acciones Compradas" id="Usuario" name="Usuario">
								</div>

								<div class="form-group">
									<label>Fecha</label>
									<input class="form-control" placeholder="Ej: 2018-03-18" id="Fecha" name="Fecha">
								</div>

								<div class="form-group">
										<label>Estado</label>
										<input class="form-control" placeholder="Verificado/En Revisión/Rechazado" id="Estado" name="Estado">
									</div>

									<div class="form-group">
											<label>Color</label>
											<input class="form-control" placeholder="Sucess/Warning/Danger" id="Color" name="Color">
										</div>

									<div class="form-group">
									<label>Descripcion</label>
									<textarea class="form-control" rows="4" name="Descripcion" id="Descripcion"></textarea>
								</div>

									<button type="submit" class="btn btn-success">Enviar</button>
									</form>
					</div>
				</div>
			</div>


				<div class="col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">Informacion</div>
				<div class="panel-body">
					<p><b>Si el Estado es Verificado en Color se debe colocar sucess , si el estado es En Revisión en color se debe suceder Warning y si es Rechazada colocar en colocar Danger</b></p>
					Se recomienda añadir en la descripcion , el nombre de las personas y el vendedor y imagenes , explicando la situacion de la venta entorno del rol etc , resumiendolo.
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
