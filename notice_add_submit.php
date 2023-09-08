<?php
include "inc_head.php";
$host = "localhost";
$user = "root";
$passwd = "kkyyjj246";
$dbName = "userinfo";

@$oDB = new mysqli($host, $user, $passwd, $dbName);

if ($oDB->connect_error) {
    die("DB Error : ".$oDB->connect_error);
}

function sql_query($sql='') {
    global $oDB;

    return $oDB->query($sql);
}

function sql_get_row($sql='') {
    global $oDB;

    return $oDB->query($sql)->fetch_array(MYSQLI_ASSOC);
}

function sql_get_value($sql='') {
    global $oDB;

    return $oDB->query($sql)->fetch_array(MYSQLI_NUM)[0];
}


if (trim($_POST['title']) == "" || trim($_POST['detail']) == "") {
    die("<script>alert(\"제목과 내용을 입력해주세요.\"); history.back();</script>");
}
$id = $_SESSION["username"];
$title = $_POST["title"];
$detail = $_POST['detail'];
$date = date("Y/m/d/H시i분s초");
$i = 0;
$sql = "insert into notice_board (id,title,detail,date) values('$id','$title','$detail','$date')";


if (sql_query($sql)) {
    echo("<script>alert(\"등록했습니다.\");location.href=\"notice_board.php\";</script>");
} else {
    echo("<script>alert(\"등록하지 못했습니다.\n\n서버 오류\"); history.back();</script>");
}
?>