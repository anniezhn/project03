<!DOCTYPE html>
<?php $thisPage = "portfolio"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Project 3</title>
    <?php include "inc/top.inc"; ?>
	<?php include "inc/nav.inc"; ?>



	<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">1 / 2</div>
			<img src="images/lab01.png">
			<div class="text">Lab 01</div>
			<p>Lab 01 this is the first lab of CSC 174. This refamiliarized me with the basics of HTML and CSS that I learned in CSC 170. This includes a picture of a flower and grass and also includes fake text. You can see my Lab 1 <a href="http://urcsc170.org/azhang/lab01/">here</a>.</p>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 2</div>
			<img src="images/lab02.png">
			<div class="text">Lab 02</div>
			<p>Lab 02 is the second lab of CSC 174. This lab was to explore PHP includes and helped me learn ahout how to use php includes and the correct format. You can see my lab 2 <a href="http://urcsc170.org/azhang/lab02/index.php">here.</a></p>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="images/lab03.png">
			<div class="text">Lab 03</div>
			<p>This lab was the third lab of CSC 174. This lab was my first exploration into frontend framworks. You can see my lab 3 <a href="http://urcsc170.org/azhang/lab03">here.</a></p>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>

	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span>





	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script type="text/javascript">
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
		  var dots = document.getElementsByClassName("dot");
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
	</script>	
</body>


</html>