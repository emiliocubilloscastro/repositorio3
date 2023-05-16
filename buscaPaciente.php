<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de Solicitud de Ambulancia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Ingreso de Solicitud de Ambulancia</h2>
        
        <!-- Formulario de búsqueda de paciente por RUN -->
        <div class="form-group">
            <label for="run">Buscar Paciente por RUN:</label>
            <div class="input-group">
                <input type="text" class="form-control" id="run" name="run" required>
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary" onclick="buscarPaciente()">Buscar</button>
                </div>
            </div>
        </div>
        
        <!-- Campos del formulario de ingreso de solicitud -->
        <div id="pacienteForm" style="display: none;">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" readonly>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" readonly>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" readonly>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" readonly>
            </div>
            
            <!-- Botón para continuar con el ingreso de la solicitud -->
            <button type="button" class="btn btn-primary" onclick="continuarSolicitud()">Continuar Solicitud</button>
        </div>
        
        <!-- Formulario de ingreso de solicitud de ambulancia -->
        <div id="solicitudForm" style="display: none;">
            <h3>Ingreso de Solicitud de Ambulancia</h3>
            
            <!-- Aquí puedes agregar los campos del formulario de ingreso de solicitud -->
            
            <!-- Botón para enviar la solicitud -->
            <button type="submit" class="btn btn-success">Enviar Solicitud</button>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function buscarPaciente() {
            var run = $('#run').val();
            
            // Aquí puedes realizar la lógica de búsqueda del paciente en la base de datos
            // y cargar los datos en los campos correspondientes
            
            $consulta = mysql_query("select * from paciente where runPaciente = '$rutpac'");


            echo '$runPaciente';

            // Ejemplo de carga de datos ficticios
            var nombre = 'Juan Pérez';
            var edad = 30;
            var direccion = 'Av. Principal 123';
            var telefono = '+1 234 567 890';
            
            // Actualizar los campos
            // Actualizar los campos del formulario con los datos del paciente
            $('#nombre').val(nombre);
            $('#edad').val(edad);
            $('#direccion').val(direccion);
            $('#telefono').val(telefono);
            
            // Mostrar el formulario del paciente y ocultar el formulario de búsqueda
            $('#pacienteForm').show();
            $('#solicitudForm').hide();
        }
        
        function continuarSolicitud() {
            // Aquí puedes realizar las acciones necesarias para continuar con el ingreso de la solicitud
            
            // Mostrar el formulario de solicitud y ocultar el formulario del paciente
            $('#pacienteForm').hide();
            $('#solicitudForm').show();
        }
    </script>
</body>
</html>
