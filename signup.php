<?php

// Validación de datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validaciones

  // Encriptar contraseña
  $hash = password_hash($password, PASSWORD_DEFAULT);

  // Insertar nuevo usuario en la BD

}

// Importar CSS
require 'assets/styles.css';

?>

<!-- Formulario de registro -->

<form>
  <!-- Inputs y botón submit -->
</form>