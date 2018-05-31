<?php /*
 Gestión de usuarios por FR0Z3N H34R7.
 POO (Programación Orientada a Objetos)
 */
class Usuarios
{

  function __construct()
  {
    $this->conexion = new Database();
    $this->sessiones = new Sessions();
  }
  public function LoginSeguro()
  {
    global $msg;
    $sql = $this->conexion->prepare('SELECT * FROM '.T_USUARIOS.' WHERE '.C_USER.' = :usuario AND '.C_PASS.' = :pass'); // Preparo la consulta
    $sql->bindParam(":usuario", $_POST['username'], PDO::PARAM_STR);
    $sql->bindParam(":pass", md5($_POST['password']), PDO::PARAM_STR);
    $sql->execute(); // Ejecuto la consulta
    $result = $sql->fetchAll(); // deposito todo en result
    if ($result) {
      $this->sessiones->init();
      $this->sessiones->set('REMOTE_ADDR', $_SERVER['REMOTE_ADDR']);
      $this->sessiones->set('HTTP_USER_AGENT', $_SERVER['HTTP_USER_AGENT']);
      $this->sessiones->set('iduser', $result[0]['id']);
      $this->sessiones->set('usuario', $_POST['username']);
      $this->sessiones->set('logueado', "SI");
      header("Location: index.php");
    }
    else {
      header('Location: login.php?error=Datos');

    }
  }
}
 ?>
