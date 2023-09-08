<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>

<body>
  <h1>관리자로 로그인하십시오.</h1>
  <form action="logincheck.php" method="post">
      <input type="text" name="id" placeholder="E-mail">
      <br>
      <input type="password" name="password" placeholder="password">
      <br>
      <input type="checkbox" id="auto_login" name="auto_login" value="y">
      <label for="save"><span></span>자동로그인</label> 
      <input type="submit" value="로그인!">
    </form>
    <button onclick = "location.href='signup.php'">회원가입</button>
  </body>
</html>

