<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'voting_system');
if(!isset($_SESSION['Email'])){
  echo "<script> window.open('Login.php','_self') </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Success</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    *{
        margin:13px ;
        padding-left:10px ;
    }
    .container{
        text-align: center;
        justify-content: center;
        
    }
</style>

<body>


<div class="container row " >
  
  <div class="card" style="width:400px">
    <h2>Person 1</h2>
    <img class="card-img-top" src="man.svg" alt="Card image" style="width:80%;">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="#" class="btn btn-primary" style="width: 100%;">Vote</a>
    </div>
  </div>

  <br>
  
 
  <div class="card" style="width:400px">
    <h2>Person 2</h2>
    <img class="card-img-top" src="woman.svg" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">Jone Doe</h4>
      <!-- <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p> -->
      <a href="#" class="btn btn-primary" style="width: 100%;">Vote</a>
    </div>
  </div>

</div>
<div style="justify-content: center;text-align: center;">
    <a href="Logout.php" class="btn btn-dark" style="width: 30%;">LogOut</a>
  </div>

</body>
</html>