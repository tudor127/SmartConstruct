<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php");?>
  <body>
   <?php include("includes/nav.php");?>
   
  

    
     <div style="width:80%;margin:0 auto;">
      <div class="row featurette topm">
        <div class="col-md-12 media">
          <h2 class="h2 titleM">  <span class="glyphicon glyphicon-picture"></span> Galerie foto</h2><br>
     <br>
        <div class="row1 row">
  <div class="column">
    <img src="img/img01.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow img img-responsive col-sm-3" style="">
  </div>
  <div class="column">
    <img src="img/img04.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow img img-responsive col-sm-3">
  </div>
  <div class="column">
    <img src="img/img05.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow img img-responsive col-sm-3">
  </div>
  <div class="column">
    <img src="img/img14.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow img img-responsive col-sm-3">
  </div>
  <div class="column">
    <img src="img/img07.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow img img-responsive col-sm-3">
  </div>
  <div class="column">
    <img src="img/img08.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow img img-responsive col-sm-3">
  </div>
  <div class="column">
    <img src="img/img09.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow img img-responsive col-sm-3">
  </div>
  <div class="column">
    <img src="img/img10.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow img img-responsive col-sm-3">
  </div>

  <div class="column">
    <img src="img/img11.jpeg" onclick="openModal();currentSlide(9)" class="hover-shadow img img-responsive col-sm-3">
  </div>

  <div class="column">
    <img src="img/img12.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow img img-responsive col-sm-3">
  </div>

  <div class="column">
    <img src="img/img13.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow img img-responsive col-sm-3">
  </div>

  <div class="column">
    <img src="img/img15.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow img img-responsive col-sm-3">
  </div>
</div>

<div id="myModal" class="modal " style="margin-top: 0px">
  <span class="close cursor" style="" onclick="closeModal()"><span class=" glyphicon glyphicon-remove" style="color:#fff"></span></span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 12</div>
        <img src="img/img01.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 12</div>
        <img src="img/img04.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 12</div>
        <img src="img/img05.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 12</div>
        <img src="img/img14.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 12</div>
        <img src="img/img07.jpg" style="width:100%">
    </div>

       <div class="mySlides">
      <div class="numbertext">6 / 12</div>
        <img src="img/img08.jpg" style="width:100%">
    </div>

       <div class="mySlides">
      <div class="numbertext">7 / 12</div>
        <img src="img/img09.jpg" style="width:100%">
    </div>

       <div class="mySlides">
      <div class="numbertext">8 / 12</div>
        <img src="img/img10.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 12</div>
        <img src="img/img11.jpeg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 12</div>
        <img src="img/img12.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 12</div>
        <img src="img/img13.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">12 / 12</div>
        <img src="img/img15.jpg" style="width:100%">
    </div>

   

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      
    </div>

    
    </div>
  </div>
</div>

        </div>
       
      </div>


     


   </div>

<style type="text/css">
    .titleM{
      color:#800000;
    }

    .textB{
      color:#444;
    }

    .imageS img{
      max-height: 200px;
      margin-bottom: 20px;
      min-height: 200px;
    }
    .row1{
    
    }

    .row1 > .column {
  padding: 0 8px;
}

.row1:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  
 width: 100%;



}

.column img{
  height: 180px;
  margin-bottom: 30px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 157577;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 50%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 200px;
  width: auto;
  padding: 28px 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  background: rgba(0,0,0,0.8);
}

@media (max-width: 1000px)
{
  .prev,.next{
    top:140px;
  }
}

@media (max-width: 1100px)
{
  .column img{
    height:150px;
  }
}

@media (max-width: 820px)
{
  .column img{
    height:120px;
  }
}

@media (max-width: 770px)
{
  .column img{
  min-width: 340px;
  margin: 20px auto;
  height: auto;
  }

  .titleM{
    text-align: center;
    margin-bottom: 50px;
  }
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  cursor: pointer;
}

</style>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
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
 <?php include("includes/footer.php");?>
   <?php include("includes/scripts.php");?>
  </body>
</html>
