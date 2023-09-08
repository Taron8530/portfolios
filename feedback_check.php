<?php 
    $feedback = $_POST["feedback"];
    $con = mysqli_connect("localhost","root","kkyyjj246","userinfo");
    if (!$con) {
        $error = mysqli_connect_error();
        $errno = mysqli_connect_errno();
        print "$errno: $error\n"; exit();
      }
    $query = "insert into feedback (feedback) values('".$feedback."')";
    $result = mysqli_query($con,$query);
        ?>
        <script> alert("의견을 보내 주셔서 감사합니다"); location.href="index.php";</script>
        