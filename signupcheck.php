<?php 
    $E_mail = $_POST["e-mail"];
    $nickname = $_POST["nickname"];
    $password = $_POST["password1"];
    $passwrd1 = $_POST["password2"];
    $con = mysqli_connect("localhost","root","kkyyjj246","userinfo");
    $sql = 'SELECT * FROM account WHERE e_mail="test1"';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $test = $row['password'];
    echo "<script> alert(\"$E_mail\");</script>";
    echo "<script> alert(\"$test\");</script>";

    if (!$con) {
        $error = mysqli_connect_error();
        $errno = mysqli_connect_errno();
        print "$errno: $error\n"; exit();
      }
    if($row["e_mail"]==$E_mail){
        echo "<script> alert(\"중복된 이메일입니다.\"); location.href=\"signup.php\";</script>";
    }else if($password != $passwrd1){
        echo "<script> alert(\"패스워드가 일치하지 않습니다.\"); location.href=\"signup.php\";</script>";
    }else{
     $querys = "insert into account (e_mail,nickname,password) values('$E_mail','$nickname','$password')";
     $results = mysqli_query($con,$querys);
     echo "<script> alert(\"회원가입이 완료되었습니다 로그인창으로 이동합니다.\"); location.href=\"login.php\";</script>";
    }
?>