<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Feedback</title>
  <style>
    
  </style>
</head>
    <hi>피드백을 확인하세요!.</hi> <br><br><br><br>
    <?php
   $conn = mysqli_connect("localhost", "root", "kkyyjj246" , "userinfo");
   $sql = "SELECT * FROM feedback";
   $result = mysqli_query($conn, $sql);
   $i = 1;
   if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
   echo "번호: " . $i. " 피드백:" . $row["feedback"]. "<br>";
   $i++;
   }
   }else{
   echo "테이블에 데이터가 없습니다.";
   }
   mysqli_close($conn); // 디비 접속 닫기
?>

  </body>
</html>

