$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })


   function navbar() {
     var x = document.getElementById("navbarOCM");
     if (x.style.display === "block") {
       x.style.display = "none";
     } else {
      x.style.display = "block";
    }
  }
  

  window.addEventListener('scroll', function() {
    var cards = document.querySelectorAll('.animated-image-up');
    cards.forEach(function(card) {
      var position = card.getBoundingClientRect().top;
      var screenHeight = window.innerHeight;
      if (position < screenHeight) {
        card.classList.add('animate');
      }
    });
  });