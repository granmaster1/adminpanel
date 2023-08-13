<?php

// Conexión a la BD 
require 'db.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Obtener datos del formulario
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Consulta SQL
  $sql = "SELECT * FROM usuarios WHERE email = ?";
  
  // Preparar y ejecutar consulta
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);

  $user = mysqli_fetch_assoc($result);

  // Verificar contraseña
  if(password_verify($password, $user['password'])) {
      
    $_SESSION['id'] = $user['id'];

    header("Location: profile.php");

  } else {
    echo "Datos incorrectos";
  }

}

// Importar CSS
require 'assets/styles.css';

?>


<!-- Formulario HTML -->

<form>
  <!-- Inputs y botón -->  
</form>