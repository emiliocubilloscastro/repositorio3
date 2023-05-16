<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Pacientes</title>
</head>
<body>   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



  <div class="container mt-3">
  <form action="guardar_paciente.php" method="POST" >

<?php 
include 'navbaru.php';
 
?>

          <div class="form-row">
               <div class="form-group ">
                   <label for="run">RUN del Paciente:</label>
                   <div class="form-row">
                       <div class="col-md-3"> 
                             <input type="text" class="form-control" name="run" id="run">
                         </div>
                         <div class="col-md-1">    
                           <input type="text" class="form-control" name="dv" id="dv">
                        </div>
                           
        

     <div class="form-row">
         <div class="col-md-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
    <div class="col-md-3">
             <label for="apellidoPaterno">Apellido Paterno</label>
             <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno"class="form-control">

   
     </div>
    <div class="form-group col-md-3">
           <label for="apellidoMaterno">Apelido Materno</label>
          <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno">
    </div>
    <div class="form-group col-md-2">
           <label for="fechaNacimiento">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
    </div>

    <div class="form-group col-md-1">
           <label for="EDAD">Edad</label>
          <input type="text" class="form-control" id="edad" name="edad">
    </div>
  </div>

  <div class="form-row">
         <div class="form-group col-md-5">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion"  name="direccion">
          </div>
    <div class="form-group col-md-2">
             <label for="telefono">Teléfono</label>
             <input type="text" class="form-control" id="telefono" name="telefono" class="form-control">

   
     </div>
    <div class="form-group col-md-3">
           <label for="diagnostico">Diagnóstico</label>
          <input type="text" class="form-control" id="diagnostico" name="diagnostico">
    </div>
    <div class="form-group col-md-2">
           <label for="prevision">Previsión</label>
          <input type="text" class="form-control" id="prevision" name="prevision">
    </div>
  </div>
  </div>

  </div>
                    </div>
                            
        </div>


  <div class="form-group col text-center">
  <button type='submit' class="btn btn-primary">Ingresar</button>
  <!--<button onclick="location.href='editar2.php'" class="btn btn-primary">Actualizar</button>-->
  <button onclick="location.href='menuprincipal.php'" class="btn btn-primary">Salir</button>
</div>

</form>

</div>
</body>
</html>