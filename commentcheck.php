<?php
    include "inc_head.php";
   $con = mysqli_connect("localhost","root","kkyyjj246","userinfo");
   if (!$con) {
       $error = mysqli_connect_error();
       $errno = mysqli_connect_errno();
       print "$errno: $error\n"; exit();
     }
     if(trim($_GET['comment'])==""){
      echo "<script>alert(\"댓글을 작성해주세요!.\"); location.href=history.back();</script>";
     }else if($_SESSION["username"]==""){
        echo "<script>alert(\"로그인 후 가능합니다.\"); location.href=\"login.php\";</script>";
     }else{
      $title = $_GET['title'];
      $comment = $_GET['comment'];
      $id = $_SESSION['username'];
     $query = "insert into comment (title,nickname,comment) values('$title','$id','$comment')";
     $result = mysqli_query($con,$query);
     echo "<script> location.href=history.back();</script>";
     }
?>
        
