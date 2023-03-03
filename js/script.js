/* *************************************************** */
  /* Llama al elemento que contiene la clase hero-carousel */
  var myCarousel = document.querySelector('#hero-carousel')

  /* Este codigo inicializa el carousel y le da un tiempo entre cada diapositiva */
  var carousel = new bootstrap.Carousel(myCarousel, {
                  interval: 5000,
                  pause: false
                })

/* *************************************************** */
  /* Llama al elemento que contiene la clase needs-validation */
  var forms = document.querySelectorAll('.needs-validation');

  /* Este codigo verifica el formulario que lo rellenen completo */
  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });

