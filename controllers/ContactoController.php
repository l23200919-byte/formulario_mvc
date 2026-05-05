<?php
// Controlador del formulario.
// Recibe los datos por POST, valida y decide qué vista mostrar.

require_once "models/Contacto.php";

class ContactoController {

    public function mostrarFormulario($error = "") {
        require_once "views/formulario.php";
    }

    public function procesarFormulario() {

        // Recibe los datos enviados desde el formulario.
        $nombre = trim($_POST["nombre"]);
        $correo = trim($_POST["correo"]);
        $telefono = trim($_POST["telefono"]);
        $mensaje = trim($_POST["mensaje"]);

        // Valida que el mensaje tenga mínimo 10 caracteres.
        if (strlen($mensaje) < 10) {
            $error = "El mensaje debe tener mínimo 10 caracteres.";
            require_once "views/formulario.php";
            return;
        }

        // Guarda fecha y hora del envío.
        $fecha = date("d/m/Y H:i:s");

        // Manda los datos al modelo para guardarlos.
        $resultado = Contacto::guardar($nombre, $correo, $telefono, $mensaje, $fecha);

        // Muestra la vista de resultado.
        require_once "views/resultado.php";
    }
}
?>