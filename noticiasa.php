<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fleeca - Noticias</title>
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
	      <li class="active">Nueva noticia</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Nueva noticia</h1>
	    </div>
	  </div><!--/.row-->




						<div class="col-md-6">
					<div class="panel panel-warning">
						<div class="panel-heading">Creación de nuevas noticias</div>
						<div class="panel-body">

							<form action="noticiasphp.php" method="post">
							<div class="form-group">
									<label>Categoría</label>
									<input class="form-control" placeholder="Categoría para asignar a la noticia" id="categoria" name="categoria">
								</div>

								<div class="form-group">
									<label>Título</label>
									<input class="form-control" placeholder="Título para la nueva noticia" id="titulo" name="titulo">
								</div>

								<div class="form-group">
									<label>Contenido</label>
									<textarea class="form-control" rows="10" placeholder="Contenido para la noticia" id="contenido" name="contenido"></textarea>
								</div>

								<div class="form-group">
									<label>Fecha</label>
									<input class="form-control" placeholder="Ej: 2018-03-18" id="fecha" name="fecha">
								</div>

								<div class="form-group">
										<label>Hora</label>
										<input class="form-control" placeholder="Ej: HH/MM/SS" id="hora" name="hora">
									</div>

									<div class="form-group">
											<label>Autor</label>
											<input class="form-control" placeholder="Autor visible de la noticia" id="autor" name="autor">
										</div>

									<button type="submit" class="btn btn-success">Publicar</button>
									</form>
					</div>
				</div>
			</div>


				<div class="col-md-6">
			<div class="panel panel-danger">
				<div class="panel-heading">Informacion sobre el sistema</div>
				<div class="panel-body">
					<p><b>Cualquiera de los administradores del sitio podrán crear noticias que aparecerán en la interfaz gráfica a la que accede el usuario al iniciar sesión (ruta /index.php) al enviar este formulario nuestro sistema lo registra de forma automática en la base de datos de este panel de control. </b></p>
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
