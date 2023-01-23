<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
$name=$_POST['nm'];
$email=$_POST['em'];
$password=$_POST['ps'];
$phone=$_POST['ph'];
 echo "$name.$email.$password.$phone";


$servername="localhost";
$username="root";
$password="";
$database="tea";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die( "cant connect".mysqli_connect_error());
}else{
    echo "successfull";
}

$sql="INSERT INTO nature(name,email,password,phone) VALUES('$name','$email','$password','$phone')";
 if(mysqli_query($conn,$sql)){
    echo "success";

 }else{
    echo "error".mysqli_error($conn);
 }
 mysqli_close($conn);



?>
</body>
</html>