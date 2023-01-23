<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<body>

  <!-- Navigation -->
  <nav class="w3-bar w3-black">
    <a href="index.php" class="w3-button w3-bar-item">Home</a>
    <a href="gallery.php" class="w3-button w3-bar-item">Gallery</a>
    <a href="login.php" class="w3-button w3-bar-item">Login</a>
    <a href="contacct.php" class="w3-button w3-bar-item">Contact</a>
  </nav>
  <button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
  <form action="success.php" method="post" class="form-container">
    <h1>Login</h1>
    <label for="name"><b>NAME</b></label>
    <input type="text" placeholder="Enter Name" name="nm" >


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="em">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Set a Password" name="ps" >

    <label for="phone"><b>Phone No.</b></label>
    <input type="password" placeholder="Enter ur Phone no." name="ph">
    


    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <!-- Slide Show -->
  <section>
    <img class="mySlides" src="img/1.jpg" style="width:100%;height:90vh">
    <img class="mySlides" src="img/2.jpg" style="width:100%;height:90vh">
    <img class="mySlides" src="img/3.jpg" style="width:100%;height:90vh">
  </section>

  <!--  Description 
  <section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">THE NATURE</h2>
    <p class="w3-opacity"><i>We love Nature</i></p>
    <p class="w3-justify">. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </section>-->

  <!--  Members 
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
  </section>-->
  <section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">LOGIN HERE</h2>
    <p class="w3-opacity"><b>BUTTON IN RIGHT BOTTOM</b></p>
    <p class="w3-justify">Nature does not hurry, yet everything is accomplished. —Lao Tzu
      <br>i Forget not that the earth delights to feel your bare feet and the winds long to play with your hair. —Khalil Gibran</p>
  </section>
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
    <a href="#"><i class="fa fa-facebook-official"></i></a>
    <a href="#"><i class="fa fa-pinterest-p"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-flickr"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
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