<?php
$title = $_GET['title'];
$con=mysqli_connect("localhost","root","kkyyjj246","userinfo");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"DELETE FROM notice_board WHERE title='.$title.'");
mysqli_close($con);
echo("<script>alert(\"게시물을 삭제했습니다.\");location.href=\"notice_board.php\";</script>");
?>