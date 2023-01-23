<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">

<body>

  <!-- Navigation -->
  <nav class="w3-bar w3-black">
    <a href="index.php" class="w3-button w3-bar-item">Home</a>
    <a href="gallery.php" class="w3-button w3-bar-item">Gallery</a>
    <a href="login.php" class="w3-button w3-bar-item">Login</a>
    <a href="contacct.php" class="w3-button w3-bar-item">Contact</a>
  </nav>

  <!-- Slide Show 
  <section>
    <img class="mySlides" src="img/1.jpg" style="width:100%">
    <img class="mySlides" src="img/2.jpg" style="width:100%">
    <img class="mySlides" src="img/3.jpg" style="width:100%">
  </section>-->

  <!--  Description -->
  <section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">CONTACT US</h2>
    <p class="w3-opacity"><i>We love Nature</i></p>
    <p class="w3-justify">.  Look deep into nature, and then you will understand everything better. —Albert Einstein</p>
   
<class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
<a href="https://www.linkedin.com/in/aditya-gaur-2a3256208"><img src="img/linkedin (1).png" style="width:40px;height:40px"></a>
<a href="https://github.com/AdityaGaur7"><img src="img/github.png"  style="width:40px;height:40px"></a>
<a href="https://www.youtube.com/channel/UCuThDiAO3aXPStVmssLssKQ"><img src="img/yt.png"  style="width:40px;height:40px"></a>
<a href="https://www.instagram.com/__aditya_gaur_090/"><img src="img/inst.jpeg"  style="width:40px;height:40px"></a>
</class>
  </section>

  <!-- images -->
  <section class="w3-row-padding w3-center w3-light-grey">
    <article class="w3-third">
      <p>beauty</p>
      <img src="img/4.jpg" alt="Random Name" style="width:100%">
      <p>Nature is every where.</p>
    </article>
    <article class="w3-third">
      <p>like elixir</p>
      <img src="img/6.jpg" alt="Random Name" style="width:100%">
      <p>mothernature is the prettiest.</p>
    </article>
    <article class="w3-third">
      <p>all round</p>
      <img src="img/5.jpg" alt="Random Name" style="width:100%">
      <p>where ever you look</p>
    </article>
  </section>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
    
    <p class="w3-medium">
      Created by <a href="mailto:adgaur@gmail.com" target="_blank">ADITYA GAUR</a>
    </p>
  </footer>

  <script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3000);
    }
  </script>

</body>

</html>