<?php
  include "auth/connection.php";
  session_start();
  $conn = connect();
  $_SESSION['user']='';
  $_SESSION['userid']='';
    $m='';
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $log = $conn->query($sql);

        if(mysqli_num_rows($log)===1){
          $user=mysqli_fetch_assoc($log);
          $_SESSION['user']=$user['name'];
          $_SESSION['userid']=$user['id'];
            header('Location: profile.php');
        }else{
            $m='UserName or Password Mismatched!';
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
    <a class="navbar-brand" href="home.php">
      PostBook
    </a>
  </div>
</nav>
<div class="container">
<h1 style="text-align: center;"><?php echo $m;?></h1>
<form method="POST" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
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
<p>Created your account? <a href="signin.php">Sing In</a></p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>