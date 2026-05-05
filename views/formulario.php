<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario MVC | Macario Jiménez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap para mejorar el diseño -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <!-- Menú superior -->
    <nav class="navbar navbar-dark menu">
        <div class="container">
            <a class="navbar-brand marca" href="index.php">Macario Jiménez</a>
        </div>
    </nav>

    <!-- Encabezado visual -->
    <header class="hero-formulario">
        <div class="hero-texto">
            <p class="subtitulo">Alta costura mexicana</p>
            <h1>Contacto</h1>
            <p>Formulario desarrollado con PHP y estructura MVC.</p>
        </div>
    </header>

    <main class="container">

        <section class="seccion-formulario">

            <h2>Formulario de contacto</h2>

            <p class="texto-centro">
                Ingresa tus datos para solicitar información. El mensaje debe tener mínimo 10 caracteres.
            </p>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">

                    <div class="tarjeta-formulario">

                        <!-- Mensaje de error -->
                        <?php if (!empty($error)) { ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>

                        <!-- Formulario enviado por POST -->
                        <form method="POST" action="index.php">

                            <div class="mb-3">
                                <label class="form-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Correo electrónico:</label>
                                <input type="email" name="correo" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Teléfono:</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mensaje:</label>
                                <textarea name="mensaje" class="form-control" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-dorado w-100">
                                Enviar mensaje
                            </button>

                        </form>

                    </div>

                </div>
            </div>

        </section>

    </main>

    <!-- Footer con mapa y redes -->
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