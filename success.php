<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">

<body>

  <!-- Navigation -->
  <nav class="w3-bar w3-black">
    <a href="index.php" class="w3-button w3-bar-item">Home</a>
    <a href="gallery.php" class="w3-button w3-bar-item">Gallery</a>
    <a href="login.php" class="w3-button w3-bar-item">Login</a>
    <a href="contacct.php" class="w3-button w3-bar-item">Contact</a>
  </nav>

  <!-- Slide Show -->
  <section>
    <img class="mySlides" src="img/1.jpg" style="width:100%;height:90vh">
    <img class="mySlides" src="img/2.jpg" style="width:100%;height:90vh">
    <img class="mySlides" src="img/3.jpg" style="width:100%;height:90vh">
  </section>

  <!--  Description -->
  <section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">SUCCESSFUL LOGIN</h2>
    <p class="w3-opacity"><i>YOU ARE A REGISTERED MEMBER</i></p>
    <p class="w3-justify">. I believe in God, only I spell it Nature. —Frank Lloyd Wright</p>
  </section>

  <!-- images 
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
  <?php
$name=$_POST['nm'];
$email=$_POST['em'];
$password=$_POST['ps'];
$phone=$_POST['ph'];
 echo " ";


$servername="localhost";
$username="root";
$password="";
$database="tea";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die( "cant connect".mysqli_connect_error());
}else{
    echo "registration successfull";
}

$sql="INSERT INTO nature(name,email,password,phone) VALUES('$name','$email','$password','$phone')";
 if(mysqli_query($conn,$sql)){
    echo " ";

 }else{
    echo "error".mysqli_error($conn);
 }
 mysqli_close($conn);


?>




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