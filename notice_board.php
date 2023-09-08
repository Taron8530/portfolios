
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

.boardList {
    font-size:10pt;
    text-align:left;
}
.noticebox{
    font-size:13pt;
    margin-top:10px;
    margin-bottom:10px;
    border-bottom: 1px solid black;
}
a:link {
    text-decoration: none;
    color: black;
}

a:visited {
    text-decoration: none;
    color: black;
}

a:hover {
    text-decoration: none;
    color: black;
}

a:active {
    text-decoration: none;
    color: black;
}

.notice_add{
    position:fixed;
    z-index:100;
    right: 5%;
    bottom:10%;
    font-size:15pt;
}
.back{
    top:0%;
    left:10%;
}
</style>

<button class ="back" onclick ="location.href='index.php'">home</button>
<div class="container">
    <div class="messageHead">게시판</div><br/>
    <div class="boardList">
<?php
$sql = sql_query("select * from notice_board");
// $result = $sql ->mysqli_query();
// echo mysqli_num_rows($result);
?>
<div class = "pagination">
    <?php
    $data_num = mysqli_num_rows($sql);
    $page_num = ceil($data_num / 10);
    $page_num = ($data_num - $data_num % 10) / 10 + 1;
    ?>
        <?php
        if(array_key_exists('page', $_POST)){
            printpage($_POST['page']);
        }
        else{
        	printpage(1);
        }
        function printpage(int $page){
            $start_data = ($page - 1) * 10;
            if(array_key_exists('board_search', $_POST)){
                board();
            }
            else{
                $conn = mysqli_connect('localhost', 'root', 'kkyyjj246', 'userinfo');
                $sql = "SELECT * FROM notice_board order by date desc limit $start_data, 20;";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
    ?>  <div class = "noticebox"><a href="./board_view.php?title=<?=$row['title']?>"><?=$row['title']?></a><br/>
    </div>
        <?php
                }
                
                mysqli_close($conn);
            }
        }
    ?>
    <form method = "post">
            <?php
                for($i = 1; $i <= $page_num; $i = $i+1){
                    echo "<input type = 'submit' name = 'page' value = '$i'/>";
                }
            ?>
        </form>
</div>
    </div>
</div>
<button class ="notice_add" onclick ="location.href='notice_add.php'">글 쓰기</button>