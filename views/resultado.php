<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado MVC | Macario Jiménez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap para diseño -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <nav class="navbar navbar-dark menu">
        <div class="container">
            <a class="navbar-brand marca" href="index.php">Macario Jiménez</a>
        </div>
    </nav>

    <header class="hero-formulario hero-resultado">
        <div class="hero-texto">
            <p class="subtitulo">Resultado del envío</p>
            <h1>Confirmación</h1>
        </div>
    </header>

    <main class="container resultado-contenedor">

        <div class="tarjeta-resultado">

            <h1><?php echo $resultado["estado"]; ?></h1>

            <p><strong>Nombre:</strong> <?php echo $resultado["nombre"]; ?></p>
            <p><strong>Correo:</strong> <?php echo $resultado["correo"]; ?></p>
            <p><strong>Teléfono:</strong> <?php echo $resultado["telefono"]; ?></p>
            <p><strong>Mensaje:</strong> <?php echo $resultado["mensaje"]; ?></p>
            <p><strong>Fecha y hora:</strong> <?php echo $resultado["fecha"]; ?></p>

            <a href="index.php" class="btn btn-dorado">
                Volver al formulario
            </a>

        </div>

    </main>

    <footer class="footer-moda">

        <div class="container">

            <div class="row">

                <div class="col-md-6">
                    <h5>Ubicación</h5>

                    <iframe
                        src="https://www.google.com/maps?q=Monte%20L%C3%ADbano%20250,%20Lomas%20de%20Chapultepec,%20Miguel%20Hidalgo,%2011000%20Ciudad%20de%20M%C3%A9xico,%20CDMX&z=15&output=embed"
                        width="100%" height="250"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

                    <p class="direccion">
                        Dirección: Monte Líbano 250, Lomas de Chapultepec, Miguel Hidalgo,
                        11000 Ciudad de México, CDMX
                    </p>
                </div>

                <div class="col-md-6 text-center">
                    <h5>Redes Sociales</h5>

                    <p>Síguenos para conocer nuestras colecciones.</p>

                    <div class="redes">
                        <a href="https://www.instagram.com/macariojimenez/" target="_blank">
                            <img src="imagenes/iconos/instagram.png" alt="Instagram">
                        </a>

                        <a href="https://www.facebook.com/MACARIOJIMENEZMX" target="_blank">
                            <img src="imagenes/iconos/face.webp" alt="Facebook">
                        </a>
                    </div>
                </div>

            </div>

            <hr>

            <p class="text-center">
                © TecNM Campus Pachuca – Programación Web 2026
            </p>

        </div>

    </footer>

</body>
</html>