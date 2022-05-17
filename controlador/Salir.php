<?php 

session_start();
unset($_SESSION["userId"]); 
unset($_SESSION["userRol"]);
unset($_SESSION["userNombre"]);
unset($_SESSION["userEstado"]);
unset($_SESSION["userCorreo"]);
unset($_SESSION["userPago"]);
session_destroy();


if (ini_get("session.use_cookies")) 
{
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]);
}
 

header("Location: index.php");
exit;







?>