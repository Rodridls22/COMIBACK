<!DOCTYPE html>
<html lang="es">
    
<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMIDAPP</title>
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome para íconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Enlace a tu CSS -->
        <link href="styles.css" rel="stylesheet">
    </head>

<body>

<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/COMIDAPP/comidApp.php">ComidAPP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link text-white" href="./pages/avisodp.html">Aviso de Privacidad</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="./pages/contacto.php">Contacto</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="./pages/descargar.html">Descargar</a></li>
            </ul>
            <form class="d-flex position-relative" role="search">
                <input class="form-control me-2" id="buscar" type="search" placeholder="Buscar sucursal" aria-label="Search">
                <!-- Contenedor para resultados -->
                <ul id="resultados" class="list-group position-absolute mt-2" style="z-index: 1000; width: 100%;"></ul>
            </form>
        </div>
    </div>
</nav>



<main class="flex-grow-1">
    <!-- Contenido principal de la página -->
    <div class="container">
        <div class="carousel-container">
            <!-- Carrusel -->
            <div id="foodCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#foodCarousel" data-bs-slide-to="1" class="active"></li>
                    <li data-bs-target="#foodCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#foodCarousel" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipPuEzx2guj16GDlfn8LRTVaa41rzDVon8tmeNQW=s680-w680-h510" class="d-block w-100" alt="Carrito">
                        <div class="carousel-caption d-block">
                            <h5>Carrito Ale</h5>
                            <p>Ellos y más de 100 carritos en la mejor plataforma del país</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipODIRVufmYeocCFwuVaIesJVicvMcWDOCfbqifa=s680-w680-h510" class="d-block w-100" alt="Panchos">
                        <div class="carousel-caption d-block">
                            <h5>Hamburguesería El Cóndor</h5>
                            <p>Ellos y más de 100 carritos en la mejor plataforma del país</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipNzSGumcVfsNv9cPOFsFAzZptx3wATY1_UgbfKF=s680-w680-h510" class="d-block w-100" alt="Tortas Fritas">
                        <div class="carousel-caption d-block">
                            <h5>El Carro Naranja</h5>
                            <p>Ellos y más de 100 carritos en la mejor plataforma del país</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#foodCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#foodCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </a>
            </div>
<!-- Lista de sucursales -->
<div class="store-list mt-4">
    <?php include "../controlador/fotoLocal.php"; ?>

    <?php if (!empty($sucursales)): ?>
        <?php foreach ($sucursales as $row): ?>
            <div class="store">
                <!-- Muestra la imagen -->
                <img src="<?php echo htmlspecialchars($row['Foto']); ?>" 
                    alt="<?php echo htmlspecialchars($row['Nombre']); ?>" 
                    class="store-img">

                <!-- Muestra el nombre de la sucursal -->
                <p class="store-name"><?php echo htmlspecialchars($row['Nombre']); ?></p>

                <!-- Muestra la dirección de la sucursal -->
                <p class="store-address"><?php echo htmlspecialchars($row['Direccion']); ?></p>

                <a href="#" class="btn btn-success">Ver productos</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No hay sucursales disponibles en este momento.</p>
    <?php endif; ?>
</div>

</main>
<div class="text-center py-1 bg-warning">
        <h2>¿Quieres ser parte de nosotros?</h2>
        <p>Únete a ComidAPP y descubre más sobre nuestras oportunidades y beneficios.</p>
        <a href="./pages/contacto.php" class="btn btn-primary mt-2">¡Únete ahora!</a>
    </div>

<footer class="footer bg-danger text-center text-white py-3">
    <div class="container">
        <p class="mb-0">© 2024 ComidApp. Derechos Reservados, Uruguay.</p>
    </div>
</footer>



<script src="buscador.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
