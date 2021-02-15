<?php
    include "auth/connection.php";
    session_start();
    $conn = connect();
    $m="";
    include ('navbar.php');
    if(isset($_GET['id'])){
      $id= $_GET['id'];
        $sql= "DELETE FROM post WHERE id='$id' limit 1";
        $conn->query($sql);
        header("Location: home.php");
      
    }
?>