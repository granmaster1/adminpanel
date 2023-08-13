<form method="POST" action="login.php">

  <label>Email:</label>
  <input type="email" name="email">

  <label>Contraseña:</label>
  <input type="password" name="password">  

  <button type="submit">Iniciar Sesión</button>

</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)) {
    echo "Favor completar email y contraseña";
  }

  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Formato de email inválido";
  }

}

?>

