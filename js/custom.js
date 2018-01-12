function initialSlides(index, slidersArray){
  for (var i = 0; i < slidersArray.length; i++) {
    currentSlide(index, slidersArray[i]);
  }
}

function plusSlides(n, sliderId) {
  showSlides(slideIndex += n, sliderId);
}

function currentSlide(n, sliderId) {
  showSlides(slideIndex = n, sliderId);
}

function showSlides(n, sliderId) {
  
  var i;

  var dotsGroup = sliderId + 'dots';

  var sliderId = document.getElementById(sliderId);
  var sliderDots = document.getElementById(dotsGroup)
  var slides = sliderId.getElementsByClassName('slides');

  var dots = sliderDots.querySelectorAll(".dot");

  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

}

var ractive = new Ractive({
  el: '#container',
  template: '#template',
  data: {}
});