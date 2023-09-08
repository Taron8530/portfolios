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
function logincheck(){
    if($logincheck){
        echo "<script> alert(\"로그인 후 사용가능합니다!\"); location.href=\"login.php\";</script>";
    }
}
logincheck();
?>
<style>
.container {
    width:1080px;
    padding:10px;
    margin: 0px auto;
}

.messageHead {
    border:3px #cccccc solid;
    padding:5px;
    font-size:10pt;
    text-align:center;
}
</style>
<div class="container">
    <div class="messageHead">게시판 작성..</div><br/>
    <form method="post" name="dispBoardWriteForm" id="dispBoardWriteForm" action="notice_add_submit.php" onsubmit="return procFilter('dispBoardWriteFormSubmit')" style="font-size:10pt">
        제 목<br/>
        <input type="text" name="title" id="title" placeholder="제목을 입력하세요." style="width:720px"/><br/><br/>
        내 용<br/>
        <textarea name="detail" id="detail" placeholder="내용을 입력하세요." style="width:720px; height:360px"></textarea><br/><br/><br/>
        <td>첨부파일:</td>
        <input type="file" id="file" name="file" required /><br>
            <button type="submit">등록</button>&nbsp;
            <button onclick="history.back(); return false">취소</button>
    </form>
</div>