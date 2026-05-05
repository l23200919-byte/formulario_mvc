<?php
// Modelo Contacto.
// Guarda la información del formulario en un archivo .txt.

class Contacto {

    public static function guardar($nombre, $correo, $telefono, $mensaje, $fecha) {

        // Ruta de la carpeta data.
        $carpeta = __DIR__ . "/../data";

        // Si la carpeta no existe, se crea.
        if (!is_dir($carpeta)) {
            mkdir($carpeta, 0777, true);
        }

        // Archivo donde se guardarán los datos.
        $archivo = $carpeta . "/contactos.txt";

        // Datos que se van a guardar.
        $datos = "Fecha y hora: " . $fecha . PHP_EOL;
        $datos .= "Nombre: " . $nombre . PHP_EOL;
        $datos .= "Correo: " . $correo . PHP_EOL;
        $datos .= "Teléfono: " . $telefono . PHP_EOL;
        $datos .= "Mensaje: " . $mensaje . PHP_EOL;
        $datos .= "----------------------------------------" . PHP_EOL;

        // Guarda los datos en el archivo .txt.
        file_put_contents($archivo, $datos, FILE_APPEND);

        // Regresa los datos para mostrarlos en resultado.php.
        return [
            "estado" => "Mensaje enviado correctamente",
            "nombre" => $nombre,
            "correo" => $correo,
            "telefono" => $telefono,
            "mensaje" => $mensaje,
            "fecha" => $fecha
        ];
    }
}
?>