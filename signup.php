// HTML del formulario 

<?php

// Validación y registro de usuario

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Validar datos del formulario

  // Encriptar contraseña
  $hash = password_hash($password, PASSWORD_DEFAULT);
  
  // Insertar nuevo usuario en la BD

  // Mensajes de errores o éxito

}

?>