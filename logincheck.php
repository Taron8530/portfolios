<?php
include 'inc_head.php';
    $id = $_POST["id"];
    $password = $_POST['password'];
    $auto_login = $_POST['auto_login'];
   $conn = mysqli_connect("localhost", "root", "kkyyjj246" , "userinfo");
   $sql = "SELECT * FROM account WHERE e_mail='$id'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   if($id == $row['e_mail']&& $password ==$row['password']){
     if($auto_login=="y"){
          setcookie('user_id',$row["nickname"],time()+(86400*30),'/');
          setcookie('user_password',$password,time()+(86400*30),'/');     }
     $_SESSION['username']=$row["nickname"];
     $_SESSION['password']=$password;
        echo "<script> alert(\"로그인이 되었습니다!\"); location.href=\"index.php\";</script>";
    
   }else if(trim($id == "") || trim($password == "")){
     echo "<script> alert(\"아이디 혹은 패스워드를 입력해수제요!\"); location.href=\"login.php\";</script>";
}else{
       
    echo "<script> alert(\"아이디 혹은 패스워드를 확인하십시오!\"); location.href=\"login.php\";</script>";
   }
   ?> 
