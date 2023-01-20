import { ImageShow } from "../../components/ImageShow.js";


/* navbar bg when scroll */
const navbar = document.querySelector('.navbar');
if(window.scrollY > 80) {
  navbar.classList.add('scroll');
}
document.addEventListener('scroll', function(e) {   
    if(window.scrollY > 80) {
        navbar.classList.add('scroll');
    } else {
          navbar.classList.remove('scroll');
    }
});


/*carousel*/
if(document.querySelector('.carousel')) {
    
  $('.carousel').slick({
    centerMode: true,
    centerPadding: '31%',
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnFocus: true,
    pauseOnHover: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 800,
        settings: {
          centerMode: true,
          centerPadding: '24%',
          slidesToShow: 1
        }
      }, 
      {
        breakpoint: 650,
        settings: {
          centerMode: true,
          centerPadding: '19%',
          slidesToShow: 1
        }
      }
    ]
  });

  /*stop autoplay quand on ouvre image show*/
  document.querySelector('.carousel').addEventListener(ImageShow.showOpen, function(e) {
    $('.carousel').slick('slickPause');
  });

  /* flèches perso */
  if(document.querySelector('.car-arrow-left')) {
    document.querySelector('.car-arrow-left').addEventListener('click', function(e) {
      $('.carousel').slick('slickPrev');
    });
  }
  if(document.querySelector('.car-arrow-right')) {
    document.querySelector('.car-arrow-right').addEventListener('click', function(e) {
      $('.carousel').slick('slickNext');
    });
  }
}




/* passer-commande */
document.querySelector('.js-order-button').addEventListener('click', function(e) {
  e.preventDefault();
  e.stopPropagation();
  document.querySelector('.fullName-input').focus();
});



/*home-to-cakes*/
document.querySelector('.home-to-cakes-link').addEventListener('click', function(e) {
  document.querySelector('.main').classList.add('moove-left');
});







