<?php require_once "header.php" ?>

<!-- Incluye Bootstrap CSS y JS (asegúrate de tener la última versión) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Carrusel de imágenes -->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/18.jpg" class="d-block w-100" alt="Imagen 1">
    </div>
    <div class="carousel-item">
      <img src="img/tonelada.png" class="d-block w-100" alt="Imagen 2">
    </div>
    <!-- Agrega más imágenes según sea necesario -->
  </div>

  <!-- Controles de navegación -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
