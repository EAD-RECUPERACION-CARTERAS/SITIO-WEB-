<!-- REQUERIMIENTO DE HEADER -->
<?php require_once "header.php" ?>
<!-- FIN REQUERIMEINTO DE HEADER -->


<!-- INICIO DE PRIMER SECCION  -->
<div class="card bg-dark text-white row">

<div class="row"><img class="card-img imagenprincipal " src="img/18.jpg" style="width:100%" alt="imagen principal"></div>

  
  <div class="card-img-overlay">
    <br>
    <br>
    <br>
    <br><br>
    <center>
    <div class="principal1" style="width: 100%;">
    <h1 class="display-1" style="color: white; width: 50%;">PITAHAYA</h1>
</div>

    <br>
    <div class="card" >
    <h1 class="principal2 animated-image" style="color:#D43C6D">PREMIUM</h1>
    <br>
    
  </div>


    <div>
        <br>
        <br>
     
    <a href="quienessomos.php" aria-label="aprende mas sobre el proceso de las pitahayas by OCM">
      <button type="button" id="leer" class="btn btn-lg   botonl   fw-bolder  boton5 grow ">LEER MAS</button>
    </a>


    <a href="contacto.php">
     <button type="button" class="btn  btn-lg botonl    fw-bolder   boton5 grow">CONTACTO</button>  
    </a>
    </div>

    <br>
    
    </center>     
   
  </div>

</div>
<!-- FIN DE PRIMER SECCION  -->
<!-- INICIO DE SEGUNDA SECCION -->


<div class="row">
  <img class=" " src="img/fondos/fondo3.png" alt="imagen principal">
  </div>

<br>

<div class="card text-center border-light">
 
  <div class="card-body ">

    <div class="card " >
    <center><h2 class="principal3 animated-image" style="color:#D43C6D">Pitahaya Premium</h2></center> 
    </div>
    <br>
    <center>
    <div class="">
    <img class="animated-image"   src="img/logonombre.png" alt="imagen del logo de Pitahaya Premium " style="width: 40%; height:auto">
    </div>
    </center>

  <br>
  <div  class="procesos3" >
    <h3 class="textjustify" style="color:#4D4D4D">
    Directo del campo y de las manos del productor, te ofrecemos la mejor calidad de Pitahaya para el mercado Nacional y de Exportación.</h3>
    <br>
    <h3 class="textjustify"  style="color:#4D4D4D" >Contamos con los certificados y estándares internacionales y nacionales que aseguran la calidad e inocuidad de nuestro producto. En todos los procesos de producción, corte, selección y empacado. Para así mantener el óptimo estado de la fruta.</h3>
    <br>
    <h3 class="textjustify" style="color:#4D4D4D" >OCM te ofrece los métodos de comercialización más innovadores. Para disfrutar de los beneficios de la PITAHAYA PREMIUM.
    </h3>
    </div>
    <br>


    <a href="pitahaya.php">
      <button type="button"  class="btn-success btn-lg grow boton5 rounded-pill">CONOCE NUESTROS PRODUCTOS</button>
      </a>
      <br>
<br>
<!-- <h3 style="color:#4D4D4D">Nos adaptamos a sus necesidades ya sea por </h3> <h3 style="color:#D43C6D" > caja o tonelada.</h3> -->
  </div>
</div>




<br>
<br>
<!--  -->
<style>
    .animated-image {
      opacity: 0;
      transform: translateX(100%);
      transition: opacity 0.5s, transform 0.5s;
    }

    .animate {
      opacity: 1;
      transform: translateX(0);
    }
  </style>

<!-- <div class="row  ">
<div class="col-sm-6">
<div class="card-columns">
  <div class="card border-light"  >
    <center><img class="card-img-top animated-image " src="img/caja.png" alt="Card image cap" style="width:350px; height:350px "  >
    <div class="card-body"></center>
    <center>
      <h2 style="color:#D43C6D"  class="card-title">POR CAJA</h2>
      </center>
      <h4 class="card-text procesos3">Te ofrecemos cajas de capacidad de 10, 18 y 25 kg. con la etapa óptima de maduración que requieras para que puedas consumir o suministrar la fruta de la mejor manera. 
        Siempre manejando los más altos estándares de calidad y protección de tu producto.</h4>
    </div>
  </div>
  </div>

  <div class="col-sm-6">
  <div class="card border-light">
   <center><img class="card-img-top animated-image" src="img/tonelada.png" alt="Card image cap" style="width:350px; height:350px "></center> 
    <div class="card-body">
      <center>
      <h2 style="color:#D43C6D"   class="card-title">POR TONELADA</h2>
      </center>
      <h4 class="card-text procesos3">Te ofrecemos el producto por tonelada y servicio de envío a cualquier parte de la república, con los más altos estándares de protección y el estado de maduración que requieras. Directo de corte de nuestras huertas si así lo requieres.
¡De nuestras huertas directo a su negocio!</h4>
<br>
<br>
</div>
    </div>
  
  </div>
  </div> 

  </div>
  <script>
    window.addEventListener('scroll', function() {
      var cards = document.querySelectorAll('.animated-image');
      cards.forEach(function(card) {
        var position = card.getBoundingClientRect().top;
        var screenHeight = window.innerHeight;
        if (position < screenHeight) {
          card.classList.add('animate');
        }
      });
    });
  </script>

<!-- FIN DE SEGUNDA SECCION  -->
<br>
<br>

<div class="row">
  <img class=" " src="img/fondos/fondo3.png" alt="imagen principal">
  </div>



<div class="row" >


  <div class="card-header">
    <center><h2 class="principal3 animated-image" style="color:#D43C6D">Galeria</h2></center> 
  </div>

<!-- INICIO SECCION GALERIA  -->

<!-- Carrusel de imágenes -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 100%;" >
  <div class="carousel-inner">

    <div class="carousel-item active data-bs-interval="2000"">
      <center>
      <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1122106575647637%2F&show_text=false&width=367&t=0" width="367" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
      </center>
    </div>

    <div class="carousel-item data-bs-interval="2000"">
    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1365873934074533%2F&show_text=false&width=367&t=0" width="367" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
    </div>
   
    <div class="carousel-item data-bs-interval="2000""   style="width: 50%; height:auto">
      <img src="img/pitahaya.jpg" class="d-block w-100  tamano" alt="Imagen 3" >
    </div>

  

    <div class="carousel-item data-bs-interval="2000"">
      <img src="img/pitahayacolores.jpg" class="d-block w-100 tamano" alt="Imagen 5" >
    </div>

   



  </div>

  <!-- Controles de wsegación -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
<!-- FIN SECCION GALERIA  -->

<br>
<br>
<!-- INICIO SECCION PROCESOS -->

<div class="procesos">
<center><h2 class="principal3 animated-image" style="color:white">NUESTROS PROCESOS</h2></center>
<center><h4 class="principal4" style="color:white">Toda nuestra dedicación para el mejor producto</h4></center>
<div class="container ">
<div class="card-group">

  <div class="card bg-light animated-image ">
    <img class="card-img-top"   src="img/huerto.jpg" alt="logo siembra">
    <div class="card-body">
        <center>
      <h5 class="card-title" style="color:#D43C6D" >COSECHAMOS</h5>
      </center>
      <p class="card-text">Cosechamos cuidadosamente en nuestras huertas.</p>
      
    </div>
  </div>

  <div class="card animated-image ">
    <img class="card-img-top " src="img/cultivo.png" alt="Card image cap">
    <div class="card-body">
        <center>
      <h5 class="card-title" style="color:#D43C6D">SELECCIONAMOS</h5>
      </center>
      <p class="card-text">Seleccionamos únicamente las mejores pitahayas de la cosecha.</p>
    
    </div>
  </div>


  <div class="card animated-image ">
    <img class="card-img-top " src="img/madera.avif" alt="Card image cap">
    <div class="card-body">
        <center>
      <h5 class="card-title" style="color:#D43C6D">EMPACAMOS</h5>
      </center>
      <p class="card-text">Empacamos nuestro producto bajo los más altos estándares de calidad.</p>
    </div>
  </div>

  
  <div class="card animated-image ">
    <img class="card-img-top " src="img/transporte.avif" alt="Card image cap">
    <div class="card-body">
        <center>
      <h5 class="card-title" style="color:#D43C6D">ENTREGAMOS</h5>
      </center>                  
      <p class="card-text">Entregamos en express a toda la república mexicana.</p>
    </div>
  </div>
</div>
</div>
</div>
<!-- FIN SECCION PROCESOS -->

<br>
<br>
<br>
<!-- INICIO SECCION UBICACION -->
<div class="card">
  <div class="card-header border-light bg-light">
   <center><h2 class="principal3 animated-image" style="color:#D43C6D">NUESTRA UBICACION</h2></center> 
  </div>
  <div class="card-body procesos2">
    <center>
    <iframe  title="imagen de google de ubicacion de la empresa"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15116.702613191163!2d-97.757936!3d18.7009525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c57f92bbc64873%3A0xd99b319ffd6a1b06!2sOCM%20MEXICAN%20QUALITY%20ORGANICS%20SA%20DE%20CV!5e0!3m2!1ses!2smx!4v1710265420535!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<!-- FIN SECCION UBICACION  -->
<!-- ultima ediicon de ocm saul 7.0 -->
<?php require_once "footer.php"  ?>

<div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="F2F8306D-5C27-48E3-9465-1F50BFB1C507" style="display: none;">Para desplazarte, pulsa las teclas de flecha.<
/span></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div>  