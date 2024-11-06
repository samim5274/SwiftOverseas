let slideIndexx = 1;
showSlides(slideIndexx);

function plusSlides(n) {
  showSlides(slideIndexx += n);
}

function currentSlide(n) {
  showSlides(slideIndexx = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndexx = 1}
  if (n < 1) {slideIndexx = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexx-1].style.display = "block";
  dots[slideIndexx-1].className += " active";
  captionText.innerHTML = dots[slideIndexx-1].alt;
}