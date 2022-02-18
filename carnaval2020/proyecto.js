
  var nav = document.querySelector('header');

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 300) {
      nav.classList.add( 'pt-4', 'shadow');
      nav.style.background ='rgba(244, 181, 5, 0.972)';
      
    } else {
      nav.classList.remove('shadow');
      nav.style.background ='none';
    }
  });

