<?php
// Verificar que el usuario sea admin

// Conexión a la BD
require 'db.php';

// Consulta para obtener usuarios
$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

// Formulario para agregar usuario
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  // Validar y agregar usuario a la BD

}

?>

<!-- HTML del Dashboard -->

<div class="dashboard">

  <div class="sidebar">
    <!-- Menú de navegación -->
  </div>
  
  <div class="content">

    <!-- Tabla de usuarios -->
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Acciones</th>
        </tr>
      </thead>

      <tbody>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
              <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a> 
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <!-- Formulario para agregar usuario -->
    <form method="POST">
      <input name="name" placeholder="Nombre">
      <input type="email" name="email" placeholder="Email">
      <button type="submit">Agregar</button>
    </form>

  </div>

</div>