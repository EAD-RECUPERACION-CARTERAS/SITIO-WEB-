<?php require_once "header.php" ?>
<br>
<br>
<div class="row ">
  <img class=" " src="img/fondos/fondo3.png" alt="imagen principal">
</div>
<center>
  <h1 class="subPith" style="color: #D43C6D;" >Contactanos   </h1>
</center> 


<div class="card  text-white OCM bg-transparent border-0 " style="color: #D43C6D;">
  <img class="card-img imagenprincipal " src="img/fondos/fondo9.png" style="width:100%" alt="imagen principal">
  <div class="card-img-overlay">

<br>
 <br>

  <!-- inicio de formulario tercer formulario-->
  <center>
  <div class="container" >
  <div class="card border-white bg-transparent formulario " >

  <form action="https://formsubmit.co/146da4545504fe3117f7cd93120cccd6" method="POST" /   class="formOCM" style="max-width:70rem; max-height:90rem;" ">


      <center>
<div class="container"  >
<img class="animated-image logoformulario" src="img/logonombre.png" alt="imagen del logo de pitahaya by ocm " style="width: 50%; height:0% ;">
</div>
<!-- Modal  -->
<div class="">
</center>
       
        <h2 class="textjustify">Gracias por ponerte en contacto con nosotros, revisaremos tu mensaje y nos pondremos en ocntacto contigo </h2>
              
          <div class="row  ">
        <div class="col-sm-6">
        <div class="card-columns">

        <div class=" text-justify procesos3 "  >
      <label for="nombre" id="" class="fs-3 animated-image "  style="color: #D43C6D;" >Nombre (s)</label>
      <input type="text" placeholder="Nombre" style="width: 70%;" class=" form-control form-control-lg" name="Nombre del aspirante" id="nombreform"  required> 

      <label for="apellidos" id="" class="fs-3 animated-image" style="color:#D43C6D;">Apellidos</label>
      <input type="text"  placeholder="Apellidos"  style="width: 400px ;" class=" form-control form-control-lg" name="Apellidos del aspirante" id="apellidosform" required >
      <label for="apellidos" id="" class="fs-3 animated-image" style="color:#D43C6D;">Ubicacion</label>
      <input type="text"  placeholder="ubicacion"  style="width: 400px ;" class="estiloin rounded-pill form-control form-control-lg" name="Ubicacion del aspirante " id="apellidosform" required >
 
 
    </div>
      </div>
      </div>
    
      <br><br><br>
      <div class="col-sm-6">
      <label for="nombre" id="" class="fs-3 animated-image "  style="color: #D43C6D;" >Correo</label>
      <input type="mail" placeholder="Correo" style="width: 400px ;" class="estiloin rounded-pill form-control form-control-lg" name="Correo electronico " id="nombreform"  required> 

      <label for="apellidos" id="" class="fs-3 animated-image" style="color:#D43C6D;">Telefono</label>
      <input type="phone"  placeholder="Telefono"  style="width: 400px ;" class="estiloin rounded-pill form-control form-control-lg" name="Numero Telefonico del Aspirante" id="apellidosform" required >
      
      <label for="asuntos" class="fs-3 animated-image" style="color:#D43C6D;">Asunto del mensaje </label>
      <input type="phone"  placeholder="Telefono"  style="width: 400px ;" class="estiloin rounded-pill form-control form-control-lg" name="Asunto del mensaje " id="apellidosform" required >
    </div>
      <br>

    
<br>
      <center>
        <button type="submit" class=" btn-success btn-lg grow boton7 animated-image grow rounded-pill " onclick="mensaje(event)">
      Enviar <img src="img/send-mail.png" width="30px" height="30px">

        </button>
        </center>
      </div>  
    </center>  
    </div>
      </div>
    
 
        <br>
        <br>
     
          <script>
            function mensaje(event) {
                event.preventDefault(); // Evita el envío automático del formulario
        
                Swal.fire({
                    title: "¿Estás seguro de que todos tus datos son correctos?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: "Cancelar",
                    confirmButtonText: "Sí, enviar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si el usuario confirma, se envía el formulario
                        document.querySelector('.formOCM').submit();
                    }
                });
            }
        </script>
    </form> 
    </div>
    
     <!-- FIN DE IMPLEMENTACION DE FORMULARIO DE REGISTRO DE ASPIRANTES-->
  </div>
</div>
</div>
  </center>
<br><br><br>




<div class="row ">
  <img class=" " src="img/fondos/fondo3.png" alt="imagen principal">
</div>

<!--INICIO SECCION DE BANNER-->

<div  class="card container-lg" >
<div class="card bg-dark text-white">
  <img class="img-fluid card-img imagenprincipal " src="img/fondos/fondo2.png" style="width:100%" alt="imagen principal">
  <div class="card-img-overlay">
<div class="banner2">
  <div class="bannerImg">
    <div  class="row rowBnBl">
      <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-6 col-xxl-6">
        <h2 class="textjustify animated-image" style="color:#D43C6D"> ¡NO ESPERES MÁS, Y REALIZA TU PEDIDO AHORA! </h2>
      </div>

      <div class="marginBanner col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 card bg-transparent border-transparent container-lg ">
            <a  href="mailto:ventas@pitahaya-ocm.com" aria-label="contacta a la empresa Pitahaya by OCM mediante correo electronico ">
            <button type="button"  class="btn-success animated-image boton7 grow rounded-pill"  >
            <img  alt="" class="img-fluid iconBannerimgMail" src="img/correo.png " style="width:50px; height: auto ">COTIZA AHORA </button></a>
      </div>

        <div  class="marginBanner col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 card bg-transparent border-transparent">
            <a href="https://wa.link/5tz47b" target="_blank">
              <button  type="" class=" btn-success animated-image boton7 grow rounded-pill ">
              <img  alt="" class="img-fluid iconBannerimg" src="img/what.png" style="width:50px; height: auto " >WHATSAPP </button>
            </a>
        </div>

          </div>
        </div> 
      </div>

          </div>
          </div>
          </div>
 
          </div>
            <!--FIN SECCION DE BANNER  -->
</div>
</div>

    <?php require_once "footer.php" ?>