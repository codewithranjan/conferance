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
.slideshow-wrapper {
    max-width: 100% !important;
    margin: auto;
}

</style>
</head>
<body>
    <hr>
<div class="slideshow-wrapper" >
  <div class="slideshow-container shadow-lg "style="">

    <div class="mySlides fade">
     <h5>Extended version of the top 10% papers from MAC 2024 will be published in a special issue of Defence Science Journal(SCI).</h5>
    </div>

    <div class="mySlides fade">
    <h5>Welcome onboard JV Micronics(Gold Sponsor) <img src="assets/images/photos/Logo-JV-Micronics.png" alt="" style="width:60px">
</h5>
    </div>
    <div class="mySlides fade">
     <h5>Extended version of the top 10% papers from MAC 2024 will be published in a special issue of Defence Science Journal(SCI).</h5>
    </div>

    <div class="mySlides fade">
      <h5>Welcome onboard JV Micronics(Gold Sponsor) <img src="assets/images/photos/Logo-JV-Micronics.png" alt="" style="width:60px">
</h5>
    </div>
   
  </div>
</div>
<hr>
<div style="">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<hr>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
