<?php
  include "auth/connection.php";
  $conn = connect();
  $m="";
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email']?$_POST['email']:'';
    $location = $_POST['location'];
    $job = $_POST['job'];
    $password = $_POST['password'];
    $password = md5($password);
    $sq="INSERT INTO users (name,email,location,job,password) 
    VALUES('$name','$email','$location','$job','$password')";
    if($conn->query($sq)===true){
      header('Location: login.php');
    }else{
      $m = 'Connection not Established';
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>PostBook</title>
  </head>
  <body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      PostBook
    </a>
  </div>
</nav>
<div class="container">
<h1 style="text-align: center;"><?php echo $m;?></h1>
<form method="POST" action="signin.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Location</label>
    <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job</label>
    <input type="text" name="job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" require>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<p>Already have account? <a href="login.php">Log In</a></p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>