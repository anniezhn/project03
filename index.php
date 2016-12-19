<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Project 3</title>
    <?php $thisPage="home" ?>
    <?php include "inc/top.inc"; ?>
    <?php include "inc/nav.inc"; ?>

    <!-- Top Section -->
    <section id="first">
        <div class="container">
        <h1>Annie Zhang</h1>
        <p>A senior at the University of Rochester and a computer science major. Scroll or click on "Accomplishments" in the navigation bar to read about them.</p>
        <img src="images/annie.jpg" alt="Annie Zhang">
       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
      <div class="container">
        <h1>Accomplishments</h1>
        <div class="second-section">
          <img src="images/flower.jpg" alt="Flower" class="second-pic">
          <p>Lab 1 of CSC 174. This lab was an account setup and used to refamiliarize the class with the basics of HTML and CSS that we learned in CSC 170. You can see my Lab 1 <a href="http://urcsc170.org/azhang/lab01/">here</a>.</p>
        </div>
        <div class="second-section">
          <img src="images/pets.jpg" alt="Pet" class="second-pic">
          <p>Lab 2 of CSC 174. This lab was to explore PHP includes. You can see my lab 2 <a href="http://urcsc170.org/azhang/lab02/index.php">here.</a></p>
        </div>
     </div><!-- .container -->

    </section>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });



});
</script>

</body>

</html>
