<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fleeca - Usuarios</title>
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
	      <li><a href="panela.php">
	        <em class="fa fa-home"></em>
	      </a></li>
	      <li class="active">Gestionar Usuarios</li>
	    </ol>
	  </div><!--/.row-->

	  <div class="row">
	    <div class="col-lg-12">
	      <h1 class="page-header">Gestionar Usuarios</h1>
	    </div>
	  </div><!--/.row-->

		<div class="col-md-12">
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay">Comprar Acciones</div>
					<div class="panel-body">
						<p>La compra de las acciones deben ser realizadas pagando a dicho personal autorizado a la venta de acciones, la reclamación de acciones o dinero lo puedes encontrar en tu perfil.</p>
						<font face="Comic Sans MS,arial,verdana"><p><b>El precio por cada acción es de  [ 100$ dolares ] , no se hacen rebajas ni aumentos de precio , es un precio fijo.</b></p></font>
					</div>
				</div>
			</div>

				<div class="col-md-12">
								<div class="panel">

									<div class="panel-body">
										<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Admin</th>
      <th scope="col">Dinero</th>
			<th scope="col">Acciones</th>
			<th scope="col">Creditos</th>
			<th scope="col">Impuestos</th>
			<th scope="col">Personaje</th>
			<th scope="col">Servidor</th>
			<th scope="col">Codigo</th>

    </tr>
  </thead>
  <tbody>
		<?php
		$sql="SELECT * from cuentas";
		$result=mysqli_query($con,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<th><?php echo $mostrar['ID'] ?></th>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Admin'] ?></td>
			<td><?php echo $mostrar['Dinero'] ?></td>
			<td><?php echo $mostrar['Acciones'] ?></td>
			<td><?php echo $mostrar['Creditos'] ?></td>
			<td><?php echo $mostrar['Impuestos'] ?></td>
			<td><?php echo $mostrar['Personaje'] ?></td>
			<td><?php echo $mostrar['Servidor'] ?></td>
			<th><?php echo $mostrar['Codigo'] ?></th>

		</tr>
	<?php
	}
	 ?>


  </tbody>
</table>
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
