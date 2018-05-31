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

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-credit-card color-blue"></em>
							<div class="large"><?php echo $dinero; ?>$</div>
							<div class="text-muted">Dinero</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-balance-scale color-orange"></em>
							<div class="large"><?php echo $impuestos; ?>%</div>
							<div class="text-muted">Impuestos</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-sitemap color-teal"></em>
							<div class="large"><?php echo $acciones; ?></div>
							<div class="text-muted">Acciones Compradas</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-copyright color-red"></em>
							<div class="large"><?php echo $creditos; ?></div>
							<div class="text-muted">Creditos</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->

			</div><!--/.col-->

			<?php
			$sql="SELECT * from noticias";
			$result=mysqli_query($con,$sql);

			while($mostrar=mysqli_fetch_array($result)){
			 ?>

			<div class="col-md-12">
				<div class="panel panel-warning">
					<div class="panel-heading">[<?php echo $mostrar['categoria'] ?>] ─ <?php echo $mostrar['titulo'] ?></div>
					<div class="panel-body">
						<p><?php echo $mostrar['contenido'] ?> <p><hr><b> <?php echo $mostrar['fecha'] ?> ─ <?php echo $mostrar['hora'] ?> <div align="left"> <?php echo $mostrar['autor'] ?></div></b></p></p>
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
						<p>La finalidad de este proyecto es para gente que le guste negociar , damos una ayuda económica inicial , cual toda ayuda económica debe ser devuelta.
						 Tambien se podran comprar creditos con dinero , cuales creditos tendran mucho mas valor si mas de una persona compra dicho credito , aumentaria el valor.
					  Tambien se podra guardar dinero en dicha cuenta para que al paso del tiempo se vaya sumando mas y el valor de dicho dinero sera mayor.</p>
						<p>La compra/venta solamente se podra realizar con empleados del sitio , cuales se podran identificar aparte que podras comprobarlos en nuestra lista de empleados officiales a los cuales te podran ingresar dinero , vender creditos entre otros.</p>
					</div>
				</div>
			</div>

			<div class="col-md-5">
				<div class="panel panel-red">
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
			<div class="col-sm-12">
<?php
if ($_SESSION['Admin'] >= "1") { ?>
<p class="back-link"><a href="panela.php">Panel de Control</a></p>
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
