<?php

// Incluimos el archivo de conexión a la BD
require 'db.php';

// Iniciamos la sesión
session_start();

// Verificamos si se envió el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Obtenemos los datos del formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Consulta SQL para obtener el usuario
  $sql = "SELECT * FROM usuarios WHERE email = ?";
  
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  
  $result = mysqli_stmt_get_result($stmt);

  $user = mysqli_fetch_assoc($result);

  // Verificamos que la contraseña sea correcta
  if(password_verify($password, $user['password'])) {
     // Contraseña correcta, código para iniciar sesión

  } else {
     // Contraseña inválida
  }

}

// Código HTML del formulario de login
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

  <h1>Iniciar Sesión</h1>

  <form method="POST" action="login.php">
    <input type="email" name="email">
    <input type="password" name="password"> 
    <button type="submit">Ingresar</button>
  </form>

</body>
</html>