<?php include 'conexion.php';
// ...

if (isset($_GET['idSolicitud'])) {
    // Obtener el ID de la solicitud de ambulancia
    $idSolicitud = $_GET['idSolicitud'];

    // Realizar una consulta para obtener los datos de la solicitud de ambulancia
    $sql = "SELECT * FROM solicitudambulancia WHERE idSolicitud = " . $idSolicitud;
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Obtener los datos de la solicitud de ambulancia
        $fila = $resultado->fetch_assoc();
        $fechaHoraTraslado = $fila['fechaHoraTraslado'];
        $runPaciente = $fila['runPaciente'];

        // Obtener el ID del tipo de traslado
        $idEstado= $fila['idEstado'];

        // Obtener el ID del tipo de traslado
        $idTipoTraslado = $fila['idTipoTraslado'];

        // Consulta para obtener la descripción del tipo de traslado
        $sqlTipoTraslado = "SELECT descripcion FROM tipotraslado WHERE idTipoTraslado = " . $idTipoTraslado;
        $resultadoTipoTraslado = $conn->query($sqlTipoTraslado);

        if ($resultadoTipoTraslado->num_rows > 0) {
            // Obtener la descripción del tipo de traslado
            $filaTipoTraslado = $resultadoTipoTraslado->fetch_assoc();
            $descripcionTipoTraslado = $filaTipoTraslado['descripcion'];

            // Mostrar los datos de la solicitud de ambulancia
            echo "ID de Solicitud: " . $idSolicitud . "<br>";
            echo "Fecha y Hora de Traslado: " . $fechaHoraTraslado . "<br>";
            echo "RUN del Paciente: " . $runPaciente . "<br>";
          
            echo "Tipo de Traslado: " . $descripcionTipoTraslado . "<br>";

            echo "Estado: " . $idEstado . "<br>";

            // Mostrar el formulario de edición
            echo "<h2>Editar Solicitud de Ambulancia</h2>";
            echo "<form action='actualizar.php' method='POST'>";
            echo "<input type='hidden' name='idSolicitud' value='" . $idSolicitud . "'>";
            echo "Fecha y Hora de Traslado: <input type='text' name='fechaHoraTraslado' value='" . $fechaHoraTraslado . "'><br>";
            echo "RUN del Paciente: <input type='text' name='runPaciente' value='" . $runPaciente . "'><br>";
            echo "Tipo de Traslado: <input type='text' name='idTipoTraslado' value='" . $idTipoTraslado . "'><br>";
           
            echo "Estado: <input type='text' name='idEstado' value='" . $idEstado . "'><br>";
           
            echo "<input type='submit' value='Actualizar'>";
            echo "</form>";
            } else {
            echo "Tipo de Traslado no encontrado";
            }
            } else {
            echo "Solicitud de Ambulancia no encontrada";
            }
        
            // Cerrar la conexión a la base de datos
            $conn->close();
        }
            ?>
            
        