<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>feedback</title>
    <style>
        #input1{
            width: 300px;
            height:50px;
            border-top:none;
            border-left:none;
            border-right:none;
            border-bottom:3px solid black;
        }
        #input2{
            width: 100px;
            height:55px;
            border-top:none;
            border-left:none;
            border-right:none;
            border-bottom:3px solid black;
        }
    </style>
</head>
<body>
    <div>
        <h1>작품에 대한 생각을 적어주세요 </h1>
        <form action="feedback_check.php" method="post">
            <input id="input1" type ="text" name = "feedback" placeholder="작품에 대한 피드백을 입력해주세요!"/>
            <input id="input2" type ="submit" value="submit"/>
        </form>
    </div>
</body>
</html>