<?php
    include "inc_head.php";
     session_destroy();

     setcookie('user_id',$id,time()-(86400*30),'/');
     setcookie('user_password',$password,time()-(86400*30),'/');
     echo "<script> alert(\"로그아웃. 다시 로그인해주세요!\"); location.href=\"index.php\";</script>";
    
?>