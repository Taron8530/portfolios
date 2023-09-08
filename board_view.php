<?php
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
?>
<style>
.container {
    width:1080px;
    height: 900px;
    padding:10px;
    margin: 0px auto;
}

.messageHead {
    border:3px #cccccc solid;
    padding:5px;
    font-size:10pt;
    text-align:center;
}
.box{
    width: 100%;
    height: 20%;
    bottom:0%;
    font-size:10pt;
    text-align:center;
    padding:5px;
    position: absolute;
    top:5px
}

.back{
    top:0%;
    left:10%;
}
</style>
<?php
if ($_GET['title'] == "") {
    die("표시할 글이 없습니다.");
}


$board_data = sql_get_row("select * from notice_board where title = '".addslashes($_GET['title'])."'");

if (!$board_data['title']) {
    die("존재하지 않는 글입니다.");
}
?>

<button class ="back" onclick ="location.href='index.php'">home</button>
<div class="container">
    <h3>게시물 제목: <?=$board_data['title']?></h3><hr/>
    <p>내용: <?=$board_data['detail']?></p><br>
    <p>작성자: <?=$board_data['id']?></p> 
    <div> 
        <p >등록일 <?=$board_data['date']?></p>
    </div>
    <br>
    <?php
    function row_del(){
    $title = $_GET['title'];
    $con=mysqli_connect("localhost","root","kkyyjj246","userinfo");
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con,"DELETE FROM notice_board WHERE title='$title'");
    mysqli_close($con);
    echo("<script>alert(\"게시물을 삭제했습니다.\");location.href=\"notice_board.php\";</script>");
    }
        include "inc_head.php";
        if($_SESSION['username']==$board_data["id"]){
            echo "<button class =\"back\" onclick =\'row_del();'\>삭제</button>";
        }
    ?>
    <br><br>
    <br><br><br><br>
    <form action="commentcheck.php" mathod = "get">
        <input type="text" name = "comment"realpath="댓글을 입력해주세요">
        <input type="submit" value="댓글 등록">
        <input type = "hidden" name = "title" value ="<?php echo $_GET["title"];?>">
    </form>
    <br>
    <h4>댓글</h4><hr><b`r>
    <?php
    $cons = mysqli_connect("localhost","root","kkyyjj246","userinfo");
    $title = $_GET["title"];
    $sqls = sql_query("select * from comment where title = '$title'");
    $result = mysqli_query($cons,$sqls);
    
// $result = $sql ->mysqli_query();
// echo mysqli_num_rows($result);
while ($data = $sqls->fetch_assoc()){
    echo "작성자: ".$data["nickname"]. "     | 댓글 내용: " .$data['comment']. "\n"; 
    echo "<br>"; 
}

?>
    </div>
</div>          