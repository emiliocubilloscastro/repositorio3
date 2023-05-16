<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Solicitudes de Ambulancia </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

    <div class="container-fluid">
        <h2 class="mt-4 mb-4">CRUD de Solicitudes de Ambulancia</h2>
        <a href="ingresarnuevo.php" class="btn btn-primary mb-4">Crear Nueva Solicitud</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Traslado</th>
                    <th>Run</th>
                    <th>Tipo Traslado</th>
                    <th>Servicio</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Estado</th>
                
                </tr>
            </thead>
            <tbody>
                <?php
                // Conexión a la base de datos
                $conexion = mysqli_connect("localhost", "root", "", "traslado");

                // Consulta de las solicitudes de ambulancia
                $consulta = "SELECT * FROM solicitudambulancia where idEstado='1'";
                $result = mysqli_query($conexion, $consulta);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['idSolicitud']."</td>";
                    echo "<td>".$row['fechaHoraTraslado']."</td>";
                    echo "<td>".$row['runPaciente']."</td>";
                    echo "<td>".$row['idTipoTraslado']."</td>";
                    echo "<td>".$row['idServicio']."</td>";
                    echo "<td>".$row['idUbicacionOrigen']."</td>";
                    echo "<td>".$row['idUbicacionDestino']."</td>";
                    echo "<td>".$row['idEstado']."</td>";
                    echo "<td>";
                 
                    echo "</td>";
                    echo "</tr>";
                    
                }

                // Cerrar conexión a la base de datos
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
