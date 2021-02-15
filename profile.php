<?php
  include "auth/connection.php";
  session_start();
  $conn = connect();
  $m="";
  include ('navbar.php');
  $user= $_SESSION['user'];
  $id= $_SESSION['userid'];
  $sq= "SELECT * FROM users WHERE id='$id'";
  $thisUser= mysqli_fetch_assoc($conn->query($sq));

  if(isset($_POST['submit'])){
    $title= $_POST['title'];
    $body= $_POST['body'];
    $author= $_POST['author'];
    $sql= "INSERT INTO post(title, body, author) VALUES ('$title', '$body', '$author')";
          if($conn->query($sql)===true){
            header('Location:profile.php');
              $m= "Posted";
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
<div class="container">
  <h5 class="card-header"><?php echo $thisUser['name'];?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo $thisUser['job'];?></h5>
    <p class="card-text">
    Location: <b><?php echo $thisUser['location'];?></b><br>
    Email: <?php echo $thisUser['email'];?><br>
    Joined: <?php echo $thisUser['created'];?></p>
    <a href="editProfile.php" class="btn btn-primary">Edit Profile</a>
  </div>
</div>
<div style="padding:40px;" class="container">
<h4>PostBook Status</h4>
<h3><?php echo $m;?></h3>
<form method="POST" action="profile.php">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Post Title</label>
  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" require>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Post Body</label>
  <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>
<div class="mb-3">
  <input type="hidden" name="author" value="<?php echo $thisUser['name'];?>" class="form-control" id="exampleFormControlTextarea1" required></input>
</div>
<button type="submit" value="submit" class="btn btn-success" name="submit">Post</button>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>