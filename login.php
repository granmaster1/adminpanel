<?php

// Conexión BD 
require 'db.php';

session_start(); 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Obtener datos
  $email = $_POST['email'];
  $password = $_POST['password'];   

  // Consulta SQL
  $sql = "SELECT * FROM usuarios WHERE email = ?";

  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);

  $user = mysqli_fetch_assoc($result);

  // Verificar contraseña 
  if(password_verify($password, $user['password'])) {
      
    // Iniciar sesión
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];

    // Redireccionar a perfil (NUEVO)
    header("Location: profile.php");
  }
  else {
    // Contraseña inválida
  }

}

// Formulario
?>