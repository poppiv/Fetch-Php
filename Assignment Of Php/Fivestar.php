<?php



$con=mysqli_connect("localhost","root","","forming");

if(!$con){
  echo "Database Not Connected";
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highly Drive</title>
    <link rel="stylesheet" href="Fivestar.css">
</head>
<body>
    
<div class="start">
  <a href="http://localhost/Assignment%20Of%20Php/fetch.php" target="_blank">Fetch Table</a>
</div>
   <h5>Connect With Friends And The World Around You</h5>

    <div class="pi"><img src="default-avatar-profile-icon-vector-social-media-user-image-182145777.jpg" alt="">
    <form method="POST">
    <div class="Form">
        <input type="text" placeholder="Enter Name" name="Name">
        <input type="text" placeholder="Enter Email" name="Email">
        <input type="text" placeholder="Enter Password" name="Password">
        <input type="text" placeholder="Enter Country" name="Country">
    </div>

</div>

  <div class="last">
    <button name="btn">Sign In</button>
    <button name="btn">Sign Up</button>
  </div>
</Form>

  <div class="ty">---------------------------------------------<>-------------------------------------</div>


</body>
</html>


<?php

if(isset($_POST['btn'])){
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $Country=$_POST['Country'];

  $query="insert into windo values(null,'$Name','$Email','$Password','$Country')";

  if(mysqli_query($con,$query)){
    echo "Data Inserted";
  }
  else{
    echo "Data Invalid Required";
  }
}

?>