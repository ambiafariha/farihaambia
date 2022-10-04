<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/website/styles.css?<?php echo time(); ?>"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class = "transition">


<div class="topnav">

    <div class="header"> FARIHA </div>

<div class="topnav-centered">


  <a href="https://farihaambia.com/home">HOME</a>
  <a href="https://farihaambia.com/about" >ABOUT</a>
  <a href="https://farihaambia.com/resume">RESUME</a>
  <a href="https://farihaambia.com/portfolio">PORTFOLIO</a>
  <a href="https://farihaambia.com/gallery" class="active">GALLERY</a>
  

</div>
</div>


<div class="row"> 

  <div class="column">
      
    <img src="/website/houston.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">

    <video loop playsinline autoplay muted src="/website/alpona.mp4" style="width:100%; margin-bottom:-5px;" onclick="openModal();currentSlide(4)" class="hover-shadow"></video>
    
    <video loop playsinline autoplay muted src="/website/plane.mp4" style="width:100%; margin-bottom:-5px;" onclick="openModal();currentSlide(6)" class="hover-shadow"></video>  
    
  </div>

  <div class="column">
    <img src="/website/baba.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
    
    <img src="/website/3dcups.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
    
    <!-- <img src="/website/village.png" onclick="openModal();currentSlide(8)" class="hover-shadow"> -->
  </div>  

  <div class="column">
    <img src="/website/mandir.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">

    <video loop playsinline autoplay muted src="/website/EAA.mp4" style="width:100%; margin-bottom:-5px;" onclick="openModal();currentSlide(5)" class="hover-shadow"></video>
    
    <video loop playsinline autoplay muted src="/website/typography.mp4" style="width:100%; margin-bottom:-5px;" onclick="openModal();currentSlide(8)" class="hover-shadow"></video>  </div>
  
</div>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
      
      
    <div class="mySlides">
    <div class ="rectangle"style="background-color: rgb(255, 255, 250,0.9);"><img class = "webimg" src="/website/houston.jpg" style="width:auto; height:300px;">
    
      <div class = "arttext">HOUSTON<br>A street sign named Dallas in Houston, Texas.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;"> HOUSTON <br> </span> 
      <span style="font-size:12px;">A street sign named Dallas in Houston, Texas.</span>
      
      </div></div>
    </div>
    
    <div class="mySlides">
    <div class ="rectangle"style="background-color: rgb(255, 254, 227,0.9);"> <img class = "webimg" src="/website/baba.jpg" style="width:auto; height:300px;">
      <div class = "arttext">BABA<br>A candid photograph of my baba on our trip to Sada Pathor, Sylhet.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;"> BABA <br> </span> 
      <span style="font-size:12px;">A candid photograph of my baba on our trip to Sada Pathor, Sylhet.</span>
      
      </div></div>
    </div>

    <div class="mySlides">
    <div class ="rectangle"style="background-color: rgb(252, 148, 131,0.9);"><img class = "webimg" src="/website/mandir.jpg" style="width:auto; height:300px;">
      <div class = "arttext">MANDIR<br>The Shri Swaminarayan Mandir at sunset.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;"> MANDIR <br> </span> 
      <span style="font-size:12px;">The Shri Swaminarayan Mandir at sunset.</span>
      
      </div></div>
    </div>
    
       <div class="mySlides">
    <div class ="rectangle"style="background-color: rgba(251, 193, 1, 0.9);"> <video class = "webvid" loop playsinline autoplay muted src="/website/alpona.mp4" style="width:auto; height:300px;"></video>
      <div class = "arttext">ALPONA <br>Alpona drawings are a traditional Bengali folk art practiced by the women of Bangladesh, and the Bengal region of India. Traditionally it is practiced using wet white pigment made of rice flour, water, and dyes which is applied directly on the ground. Alpona designs typically consist of distinct motifs and patterns such as floral and geometric patterns.</div>
      
      <div class = "phonetext"> 
      <span style="font-size:16px;"> ALPONA <br> </span> 
      <span style="font-size:12px;">Alpona drawings are a traditional Bengali folk art practiced by the women of Bangladesh, and the Bengal region of India. Traditionally it is practiced using wet white pigment made of rice flour, water, and dyes which is applied directly on the ground. Alpona designs typically consist of distinct motifs and patterns such as floral and geometric patterns.</span>
      </div></div>
      
    </div>
    

    <div class="mySlides">
    <div class ="rectangle"style="background-color:rgba(128, 128, 0, 0.9);"> <video class = "webvid" loop playsinline autoplay muted src="/website/EAA.mp4" style="width:auto; height:300px;"></video>
      <div class = "arttext">INDIANA JANE<br>Indiana Jane is a 3D character animation created using Mixamo and placed in a real life environment using 3D motion tracking in Cinema 4D. The background footage is of a homemade miniature model of a hidden treasure chest.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;">INDIANA JANE<br> </span> 
      <span style="font-size:12px;">Indiana Jane is a 3D character animation created using Mixamo and placed in a real life environment using 3D motion tracking in Cinema 4D. The background footage is of a homemade miniature model of a hidden treasure chest.</span>
      
      </div></div> 
    </div>
    
    
 <div class="mySlides">
    <div class ="rectangle"style="background-color:rgba(72, 170, 173, 0.9);"><video class = "webvid" loop playsinline autoplay muted src="/website/plane.mp4" style="width:auto; height:300px;"></video>
      <div class = "arttext">MASK UP<br>A 3D animation of an airplane delivering a message in the sky.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;">MASK UP<br> </span> 
      <span style="font-size:12px;">A 3D animation of an airplane delivering a message in the sky.</span>
      
      </div></div>
    </div>


 <div class="mySlides">
    <div class ="rectangle"style="background-color: rgba(236, 151, 6, 0.9);"><img class = "webimg" src="/website/3dcups.jpg" style="width:auto; height:300px;">
      <div class = "arttext">IRISH COFFEE<br>A 3D piece, created using Cinema 4D reminding us to Irish-up our coffees.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;">IRISH COFFEE<br></span> 
      <span style="font-size:12px;">A 3D piece, created using Cinema 4D reminding us to Irish-up our coffees.</span>
      
      </div></div>
    </div>
    

    
  <!--   <div class="mySlides">
    <div class ="rectangle"style="background-color: #677f34;"><img class = "webimg" src="/website/village.png" style="width:auto; height:300px;">
     
      <div class = "arttext">VILLAGE<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor orci eu lobortis elementum nibh. Id faucibus nisl tincidunt eget nullam non. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Eget nunc lobortis mattis aliquam. Turpis massa sed elementum tempus egestas sed sed risus pretium. Dictum sit amet justo done.    </div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;"> VILLAGE <br> </span> 
      <span style="font-size:12px;">Loremp ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tempor orci eu lobortis elementum nibh. Id faucibus nisl tincidunt eget nullam non. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum. Eget nunc lobortis mattis aliquam. Turpis massa sed elementum tempus egestas sed sed risus pretium. Dictum sit amet justo done.</span>
      
      </div></div>
    </div> -->

    <div class="mySlides">
    <div class ="rectangle"style="background-color: rgba(151, 133, 252, 0.9);">
<video class = "webvid" loop playsinline autoplay muted src="/website/typography.mp4" style="width:auto; height:300px;"></video> <div class = "arttext">KINSBURY RUN<br>Kinsbury Run is a 3D animated typography created using Cinema 4D. The characters are lifted slightly above the canvas to create a subtle effect.</div>   

      
      <div class = "phonetext"> 
      <span style="font-size:16px;"> KINSBURY RUN<br> </span> 
      <span style="font-size:12px;">Kinsbury Run is a 3D animated typography created using Cinema 4D. The characters are lifted slightly above the canvas to create a subtle effect.</span>
      
      </div></div>
    </div>   
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
   
  </div>
</div>



<div class="footer">

<div class="socials">
  <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
  <a href="https://www.instagram.com/fariha.ambia/" class="fa fa-instagram"></a>
  <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
  
  </div>

<p class= "TM"> &copy; 2022 by Fariha Ambia </p>

</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</body>
</html>
