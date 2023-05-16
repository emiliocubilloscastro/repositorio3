<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<form action="guardar_tripulacion.php" method="POST">
    <div class="container-fluid">
  <div class="form-group col-md-4">


<?php
include 'conexion.php';
// Obtener las ambulancias de la base de datos
$sql = "SELECT idAmbulancia, descripcion FROM ambulancia";
$result = mysqli_query($conn, $sql);
// Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    // Crear el combobox con las ambulancias
     echo 'Ambulancia: <select name="idAmbulancia">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['idAmbulancia'] . '">' . $row['descripcion'] . '</option>';
        $idAmbulancia = $_POST['idAmbulancia'];
    }
    echo '</select>';
} else {
    echo 'No se encontraron AMBULANCIAS.';
}
?>    
  </div>

  <div class="form-group col-md-4">

<?php
  // Obtener los paramedicos de la base de datos
$sql = "SELECT idParamedico, nombre FROM paramedico";
$result = mysqli_query($conn, $sql);
// Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    // Crear el combobox con los paramedicos
     echo 'Paramedico: <select name="idParamedico">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['idParamedico'] . '">' . $row['nombre'] . '</option>';
        $idParamedico = $_POST['idParamedicon'];
    }
    echo '</select>';
} else {
    echo 'No se encontraron paramedicos.';
}
?>    
      </div>

  <div class="form-group col-md-4">

  <?php
  // Obtener los conductores de la base de datos
$sql = "SELECT idConductor, nombre FROM conductor";
$result = mysqli_query($conn, $sql);
// Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    // Crear el combobox con los conductores
     echo 'Conductor: <select name="idConductor">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['idConductor'] . '">' . $row['nombre'] . '</option>';
        $idConductor = $_POST['idConductor'];
    }
    echo '</select>';
} else {
    echo 'No se encontraron conductores.';
}
?>  
     </div>



  <div class="form-group col-md-4">

  <?php
  // Obtener los auxiliares de la base de datos
$sql = "SELECT idAuxiliar, nombre FROM auxiliar";
$result = mysqli_query($conn, $sql);
// Verificar si se encontraron resultados
if (mysqli_num_rows($result) > 0) {
    // Crear el combobox con los auxiliares
     echo 'Auxiliar: <select name="idAuxiliar">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['idAuxiliar'] . '">' . $row['nombre'] . '</option>';
        $idAuxiliar = $_POST['idAuxiliar'];
    }
    echo '</select>';
} else {
    echo 'No se encontraron auxiliares.';
}
?>     
  </div>
  <button type="submit" class="btn btn-primary">Guardar Tripulación</button>
</form>

</div> <!--////container////////////////////////////////////////-->