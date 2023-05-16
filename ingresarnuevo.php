<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php include 'conexion.php';
include 'navbar.php';

// Código para buscar el paciente en la base de datos y cargar los datos en los campos correspondientes
if (isset($_POST['buscar'])) {
    // Obtener el valor del RUN ingresado en el formulario de búsqueda
    $run = $_POST['run'];

    // Realizar la consulta a la base de datos para buscar al paciente
    $query = "SELECT * FROM paciente WHERE runPaciente = '$run'";
    $result = mysqli_query($conn, $query);

    // Verificar si se encontró al paciente
    if (mysqli_num_rows($result) > 0) {
        // Obtener los datos del paciente
        $row = mysqli_fetch_assoc($result);
        $dv = $row['digitoVerificador'];
        $nombre = $row['nombre'];
        $apellidoP = $row['apellidoPaterno'];
        $apellidoM = $row['apellidoMaterno'];
        $edad = $row['edad'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
    } else {
        // El paciente no fue encontrado
        $error = "Paciente no encontrado";
        header("Location: ingresoPacienteBootstrap.php");
        $run = $_POST['run'];
    }
}

?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 text-center">
            <!-- Formulario de búsqueda de paciente -->
            <form method="POST" action="" >
                <div class="form-group text-center">
                    <label for="run">RUN del Paciente:</label>
                    <div class="form-row">
                         <div class="col-md-10"> 
                             <input type="text" class="form-control" name="run" id="run">
                         </div>
                         <div class="col-md-2">    
                            <input type="text" class="form-control" name="dv" id="dv">
                         </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="buscar">Buscar</button>
            </form>

            </div>


            <div class="col-md-6">
            <!-- Mostrar los datos del paciente si se encontró -->
            <?php if (isset($nombre)) { ?>
                <h2>Datos del Paciente</h2>
                <h5><p>Nombre: <?php echo $nombre.' '.$apellidoP.' '.$apellidoM; ?>
                Edad: <?php echo $edad; ?></p></h5>
                <h5><p>Dirección: <?php echo $direccion; ?></p></h5>
                <h5><p>Teléfono: <?php echo $telefono; ?></p></h5>
                <br>
                <br>
                <br>
            <?php } ?>
            </div>

            <!-- Mostrar el mensaje de error si no se encontró el paciente -->
            <?php if (isset($error)) { ?>
                <p><?php echo $error; ?></p>
            <?php } ?>
        </div>

   
            <!-- Formulario de ingreso de solicitud de ambulancia bootstrap-->
    <form action="guardar_solicitud.php" method="POST">
        <div class="form-row">
           <div class="form-group col-md-4">
            <label for="fechaHoraTraslado">Fecha y Hora de Traslado:</label>
            <input type="datetime-local" class="form-control" name="fechaHoraTraslado" id="fechaHoraTraslado">
        </div>

    <div class="form-group col-md-4">
        <label for="runPaciente">RUN del Paciente:</label>
               <div class="form-row">
                     <div class="col-md-10"> 
                        <input type="text" class="form-control" name="runPaciente" id="runPaciente" value='<?php echo $run; ?>' readonly>
                         </div>
                         <div class="col-md-2">    
                            <input type="text" class="form-control" name="dv" id="dv" value='<?php echo $dv; ?>' readonly>
                         </div>
               </div>
      </div>

    <div class="form-group col-md-4">
    <label for="idTipoTraslado">Tipo de Traslado:</label>
                        <select class="form-control" name="idTipoTraslado" id="idTipoTraslado">
                            <?php
                            // Obtener los tipos de traslado de la base de datos
                            $sql = "SELECT idTipoTraslado, descripcion FROM tipotraslado";
                            $result = mysqli_query($conn, $sql);

                            // Verificar si se encontraron resultados
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['idTipoTraslado'] . '">' . $row['descripcion'] . '</option>';
                                }
                            } else {
                                echo '<option disabled>No se encontraron tipos de traslado</option>';
                            }
                            ?>
                        </select>
    </div>

  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="idServicio">Servicio:</label>
                        <select class="form-control" name="idServicio" id="idServicio">
                            <?php
                            // Obtener los servicios de la base de datos
                            $sql = "SELECT idServicio, nombreServicio FROM servicio";
                            $result = mysqli_query($conn, $sql);
                                                    // Verificar si se encontraron resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['idServicio'] . '">' . $row['nombreServicio'] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron servicios</option>';
                        }
                        ?>
                    </select>
    </div>

    <div class="form-group col-md-4">
    <label for="idUbicacionOrigen">Ubicación de Origen:</label>
                    <select class="form-control" name="idUbicacionOrigen" id="idUbicacionOrigen">
                        <?php
                        // Obtener las ubicaciones de origen de la base de datos
                        $sql = "SELECT idUbicacion, nombreUbicacion FROM ubicacion";
                        $result = mysqli_query($conn, $sql);

                        // Verificar si se encontraron resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['idUbicacion'] . '">' . $row['nombreUbicacion'] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron ubicaciones de origen</option>';
                        }
                        ?>
                    </select>
    </div>
    <div class="form-group col-md-4">
    <label for="idUbicacionDestino">Ubicación de Destino:</label>
                    <select class="form-control" name="idUbicacionDestino" id="idUbicacionDestino">
                        <?php
                        // Obtener las ubicaciones de destino de la base de datos
                        $sql = "SELECT idUbicacion, nombreUbicacion FROM ubicacion";
                        $result = mysqli_query($conn, $sql);

                        // Verificar si se encontraron resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['idUbicacion'] . '">' . $row['nombreUbicacion'] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron ubicaciones de destino</option>';
                        }
                        ?>
                    </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3">
    <label for="idRequerimiento">Requerimiento:</label>
                    <select class="form-control" name="idRequerimiento" id="idRequerimiento">
                        <?php
                        // Obtener los requerimientos de la base de datos
                        $sql = "SELECT idRequerimiento, descripcion FROM requerimiento";
                        $result = mysqli_query($conn, $sql);

                        // Verificar si se encontraron resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['idRequerimiento'] . '">' . $row['descripcion'] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron requerimientos</option>';
                        }
                        ?>
                    </select>
    </div>

    <div class="form-group col-md-6">
    <label for="idTripulacion">Tripulacion:</label>
                    <select class="form-control" name="idTripulacion" id="idTripulacion">
<?php
// Obtener las tripulaciones de la base de datos
$sql = "SELECT idTripulacion, Ambulancia, Paramedico, Conductor, Auxiliar FROM tripulacion";
$result = mysqli_query($conn, $sql);
                        // Verificar si se encontraron resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['idTripulacion'] . '">' . $row['Ambulancia'] . '-' . $row['Paramedico'] . '-' . $row['Conductor'] . '-' . $row['Auxiliar'] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron tripulaciones</option>';
                        }
                        ?>
                    </select>
    </div>

    <div class="form-group col-md-3">
    <label for="idEstado">Estado:</label>
                    <select class="form-control" name="idEstado" id="idEstado">
                        <?php
                        // Obtener los estados de la base de datos
                        $sql = "SELECT idEstado, descripcion FROM estado";
                        $result = mysqli_query($conn, $sql);

                        // Verificar si se encontraron resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['idEstado'] . '">' . $row['descripcion'] . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron estados</option>';
                        }
                        ?>
                    </select>
    </div>
  </div>
                
                
<div class="form-group col text-center">
                <button type="submit" class="btn btn-primary">Ingresar Solicitud</button>
                
</div>
 
            </form>
        
        <!-- Mostrar el mensaje de error si no se encontró el paciente -->
        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>
    </div>
</body>
</html>