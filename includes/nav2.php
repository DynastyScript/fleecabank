<?php
session_start();
if(!isset($_SESSION['usuario']))


{
  header('Location: login.php');
  exit();
}

?>
<?php
include 'scripts/conexion.php';
include 'scripts/cuentas.php';

?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#"><span>Fleeca</span>Bank</a>

    </div>
  </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <div class="profile-sidebar">
    <div class="profile-userpic">
      <img src="<?php echo $avatarimage; ?>" class="img-responsive" alt="">
    </div>
    <div class="profile-usertitle">
      <div class="profile-usertitle-name"><?php echo $nombre; ?></div>
      <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="divider"></div>

  <ul class="nav menu">
    <li><a href="panela.php"><em class="fa fa-dashboard">&nbsp;</em>Panel</a></li>
    <li><a href="accionesa.php"><em class="fa fa-sitemap">&nbsp;</em>Vender Acciones</a></li>
    <li><a href="noticiasa.php"><em class="fa fa-book">&nbsp;</em>Publicar Noticia</a></li>
    <li><a href="creditosa.php"><em class="fa fa-copyright">&nbsp;</em>Vender Creditos</a></li>
    <li><a href="usuariosa.php"><em class="fa fa-users">&nbsp;</em>Gestión de Usuarios</a></li>




</div><!--/.sidebar-->
