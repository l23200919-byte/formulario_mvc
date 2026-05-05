<?php
// Archivo principal del proyecto MVC.
// Decide si se muestra el formulario o se procesan los datos.

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "controllers/ContactoController.php";

$controller = new ContactoController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controller->procesarFormulario();
} else {
    $controller->mostrarFormulario();
}
?>