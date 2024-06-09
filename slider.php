<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}

/* Slideshow wrapper */
.slideshow-wrapper {
  max-width: 100%; /* Set box width to 80% */
  margin: auto;
}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  width: 1120px; /* Set fixed width for the box */
  margin: 0 auto; /* Center the box */
}

/* Slides */
.mySlides {
  display: none;
  text-align: center; /* Center the images */
}

/* Images */
.imgs {
  max-width: 100%; /* Make images responsive */
  max-height: 170px; /* Set maximum height for the images */
  display: inline-block; /* Display images as inline-block */
  vertical-align: middle; /* Align images vertically in the middle */
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  /* display: inline-block; */
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<br>
<a class="section-title" href="#" style="letter-spacing: 0px;">
<h4 style="font-size: 2.25rem; text-align: left;">Technical Co-Sponsors</h4>
                        </a>
<div class="slideshow-wrapper">
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img class="imgs" src="assets/images/photos/upsec.png">
    </div>

    <div class="mySlides fade">
      <img class="imgs" src="assets/images/photos/ieeeUP.jpg">
    </div>
    <div class="mySlides fade">
      <img class="imgs" src="assets/images/photos/upsec.png">
    </div>

    <div class="mySlides fade">
      <img class="imgs" src="assets/images/photos/ieeeUP.jpg">
    </div>
  </div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every  seconds
}
</script>

</body>
</html>
