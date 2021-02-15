<?php
    include "auth/connection.php";
    session_start();
    $conn = connect();
    $m="";
    include ('navbar.php');
      $id= $_GET['id'];
      $sql= "SELECT * from post WHERE id='$id' limit 1";
      $showPost= mysqli_fetch_assoc($conn->query($sql));

      if(isset($_POST['submit'])){
        $id =$_POST['id'];
        $title =$_POST['title'];
        $body= $_POST['body'];
        $sql= "UPDATE post SET title= '$title', body= '$body' WHERE id = '$id'";
        if($conn->query($sql)===true){
            header('Location: home.php');
        } else{
            $m= "Connection Failure!";
            header("Location: editPost.php?id=$id");
        }
      }      
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <title>PostBook</title>
  </head>
  <body>
  <div class="container">
    <h1><?php echo $m;?></h1>
  <form method="POST" action="editPost.php" enctype="multipart/form-data">
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="uname" class="form-label"> Title</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="title" type="text" class="form-control" placeholder="Post Title" id="name" value="<?php echo $showPost['title']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="text" class="form-label"> Body </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="body" type="text" class="form-control" placeholder="Post Body" value="<?php echo $showPost['body']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                                <input name="id" type="hidden" class="form-control" value="<?php echo $showPost['id']; ?>" required>
                                        </div>
                                        <button style="margin: 10px 0px;" type="submit" value="submit" name="submit" class="btn btn-primary">Change</button>
      
  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>