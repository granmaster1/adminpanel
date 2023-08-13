<?php

session_start();

if(!isset($_SESSION['id'])) {
  header("Location: login.php");
  exit();
}

// Mostrar datos del usuario
echo "<h1>Bienvenido " . $_SESSION['name'] . "</h1>";
echo "<p>Email: " . $_SESSION['email'] . "</p>";
echo "<p>ID: " . $_SESSION['id'] . "</p>";

// Cerrar sesión
session_destroy();
header("Location: login.php");