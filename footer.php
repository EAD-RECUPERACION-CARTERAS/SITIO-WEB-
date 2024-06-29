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

<footer class="footer mt-5 py-3 bg-dark text-white" style="width: 100%; height:50%" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="subPith  animated-image" style="color:#D43C6D">Contacto</h4>
                <h4 class="subPith  animated-image" style="color:#D43C6D">Dirección:</h4>
                <h4 class="subPith  animated-image" style="color:#D43C6D">Teléfono: (+52) 55 7904 3730</h4>
                <h4 class="subPith  animated-image" style="color:#D43C6D">Email: ventas@pitahaya-ocm.com</h4>
            </div>
            <div class="col-md-6">
                <h4 style="color:#D43C6D">Síguenos en redes sociales</h4>
                <ul class="list-inline">
                    
                    <li class="list-inline-item"><a href="#">
                    <a href="https://www.facebook.com/profile.php?id=61557009072043">
                        <img src="img/facebook.png" alt="Facebook" style="max-height: 100px;"></a></li>
                        
                        </a> </li>
                   
                    <li class="list-inline-item"><a href="#">
                    <a href="https://www.instagram.com/pitahayaocm/">   
                        <img src="img/instagram.png" alt="Instagram" style="max-height: 100px;"></a></li>
                     
                        </a> </li>


                    <li class="list-inline-item" style="margin-top: 10px;"><a href="#"><img src="img/fondos/logo.png" alt="logo" style="max-height: 200px;"></a></li>
                    <!-- Agrega más íconos de redes sociales si es necesario -->
                </ul>
            </div>
        </div>
    </div>
</footer>




<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script src="js/modales.js"></script>
</body>

</html>