<?php  include('inc/header.php'); ?>
    <?php 
    $id = $_GET['id'];
    $sql= "SELECT * FROM `users` WHERE `user_id` = '$id'  LIMIT 1 ";
    $res = mysqli_query($conn , $sql);
    $check = mysqli_num_rows($res);
    if(!$check){
        header("location:index.php");
    }
    $row = mysqli_fetch_assoc($res);
    $sql2 = "DELETE FROM `users` WHERE `user_id` = $id  ";
    mysqli_query($conn , $sql2);
    
     ?>
    
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User have been deleted</h1>
  <?php header("refresh:3;url=index.php"); ?>
<?php  include('inc/footer.php'); ?>

 