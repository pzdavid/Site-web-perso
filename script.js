$(function () {


           //Fermeture navbar au click 

          $('.nav a').on('click', function(){
            $('.navbar-toggle').click();
          });                      


          // Scrollspy fluide
          
          $('header a').on('click', function(e) {
              e.preventDefault();
              var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(this.hash).offset().top 
            }, 1000, function(){
              window.location.hash = hash;
            });
          });

        });