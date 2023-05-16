<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $idAmbulancia = $_POST['idAmbulancia'];
    $idParamedico = $_POST['idParamedico'];
    $idConductor = $_POST['idConductor'];
    $idAuxiliar = $_POST['idAuxiliar'];

    // Realizar la inserción de la tripulación en la base de datos
    $insertQuery = "INSERT INTO tripulacion (idAmbulancia, idParamedico, idConductor, idAuxiliar) VALUES ('$idAmbulancia', '$idParamedico', '$idConductor', '$idAuxiliar')";
    mysqli_query($conn, $insertQuery);

    // Redireccionar a la página de éxito o mostrar un mensaje de éxito
    header("Location: tripulacion_exitosa.php");
    exit();
}
?>
