<?php
// function success(){
    // $output = exec("/bin/python3 /var/www/html/it.py");
    // if(!$output){
//  
        //  echo "/python파일을 실행하지 못했습니다";
            //  }
    // else{
    // echo "<br />";
    // echo "성공적으로 실행했습니다";
    // }
// }
// exec("cp -rf /var/www/html/it.php" " /경로/ 2> /tmp/errormsg");
// success();/
?>
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
    margin-bottom:30px;
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
.noticebox{
    font-size:13pt;
    margin-top:10px;
    border-bottom: 1px solid black;
}
</style>
<div class="container">
    <div class="messageHead">ICT 동향</div><br/>
    <div class="boardList">
<?php
$sql = sql_query("select * from ict");

while ($data = $sql->fetch_assoc()):
?>
        <a class="noticebox" href="<?=$data['link']?>" target = "_blank"><?=$data['title']?></a><br/><br/><br/>
<?php endwhile?>
    </div>
</div>