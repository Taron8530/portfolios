<?php 
include 'inc_head.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Taron Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            var text = document.getElementById("typeStyle");

            var typewriter = new Typewriter(text, {
                loop: true
            });

            typewriter.typeString('Welcome to Taron Portfolio')
                .pauseFor(1000)
                .deleteAll()
                .start();

        });
    </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */   
    .icon {
    display: inline-block;
    background-size: cover;
    background-position: center;
    width: 50px;
    height: 50px;
    margin: 0 4px;
    background-repeat: no-repeat;
    margin-right:30px;
    border-radius:90%;
      overflow:hidden;
      
}

#github {
    background-image: url(githubicon.png);
}

#tistory {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAe1BMVEUAAAD///+4uLjx8fH5+fmFhYX8/PzS0tLa2trh4eFWVlbd3d2SkpKysrLW1tbu7u7n5+deXl54eHigoKBxcXHGxsZMTEwnJyc6OjosLCybm5uoqKjAwMBcXFxTU1N+fn4WFhZGRkYeHh6NjY0ODg41NTU+Pj5nZ2coKCg6I5NPAAAL0ElEQVR4nN1d6XqqShBkc8GIu8YEE9HEeN//CS+uDDBLDXQDnvqZTwIFM713j+NyI/CHu2jc2583p49j8us4v8nxtJkvep/e+s3vs9/fYfzf/aE3nn84epzO42jC+BBsDMNoYeImYruIQqYn4WAYxnMLchlGyyHD01AzDHar30r07ljtAuInImXoR1912D0+ZTSlfCg6hn1vREDvhk1E9yWpGA5WZPRuOA+InoyEYT+2kZso3mMSZUnA8G3BQO+GPYEKqc1wQLf7ZPiqbQ3UZDg4sPK74FBzQ9ZiONmw86vPsQbD4Xcj/C74fmuBoU+tHvRYVbYCqjL8bJTfBZ+NMlwnjRNM/cp1Ywz7zS7QDKsqJkAFhruW+F1Q4TNaMwzOLRKs8hltGa5b5XeBrXK0ZLhvm1+KH0aG01Pb7K7487kYtili8rAROBYMf9rmJWDMwLDfnBWK4BuWqSjD2bFtTgW8o4YqyHDQNiEJwOAqxrA7MkYEJm8ghnHbXBSIqBg27ymhWNIw7JKWKAKwb8wMe22z0MJM0ciw2wQdp1eXYZeX6A0m88bAsLtCJkNch+Gy7aeHoFcaWoZe288OQqv6dQy7aKrJoTPgNAxnbT+3BTQ+sZph0DVvQoePKgz5s0qU+LJn2HVNX4TSuFExfBUxmkElUBUMX0nKPKCQNgqG720/bgUcbBi2lXqpB7mFKmXYzaCFGdKAv4yh3/aTVsWvLMQoY9ityKgNVhjDrsadEOwQhi+7Rq9AGFarfu0Kyuu0xLD9FGg9lKrESgzbfsK6eDcxtIg8bcfrMAgCf+KBxYlf8XqaXjBdx2Ap8cKb+OkF4XpskZothm0KDHF79HMmXjcwkjx4orLqe0bnbJHT3zM8JlYoLy4wRMVMOb411Vp627K5MdB+l0U5eYZqsb2OIRiZOUursCeJ8gJ5wE/9yIk08IIWuuRWV4Eh5ter8iHKNLGqsnCo+P1IleDFoptnNUNMU3iK27uqRa7O1k6lv5+rbxBBT5hbATmGkMTSxl9lJdEzze9lkm2kuwFE8VvFEHKaDJmQpHSBvlB7Uvr9UX8DKH4k3lNkiDj2f/r7u2/FCwxZhfLW0n3yCxBZIX5EgSG0C43lyIV3vDX9vrg1jJUykMoWdqLAEHk5MgesgPwF5jq7goYy3wCprRP2cvYfIV1oWkJuISFnWtQX/IkXAJl56CNmrSgZQ8Sc0cjxJ3L+pUazPJETj0hHF2LVZovtyVCumgqQuNBliK8KeeDA8hVi0ernnZ8Mx1aX6SB8E61qe0LoS4EqZILyg5XxXO5PhglwlSbDIyDMLsA6CISdi3Vy/Qc869NPfDCE5MwCur8gTbG6LEFNYTeAAtYPKe7YXARWdSbPC7BmnswAN9gzD0A76iFr7gz7yDVG++SOTPxjFZKZ+D9gN8A8xX6OIZZMQ2S/K0oOrJs30y/f5h9fgHkYXo4h1iYJfsPt8wLbb4gYCC76DUciQzAKzLQPM/8C3IdguMwXGGKfHbFKr//zCchCEL027AZgNCMSGIK9vNgrFhwo7KMLohGrbAanNnxlDCEj4QKolUPYJdi+yvYtVBKLGZgXBE+GcEYUEqZiPAp5JaIQgIQpuKfum+TKEE5qb4D7594wIn1zkhGRvnB/9erJEJ9GAgjHnKArZREkyAVPgLLmUqBEieTBMDT/9gGzd1PY0+Z1XTA2zL0wFum/8M7QJulrjEoUEhiJ8YGT/AV70+9tKibjO0OboTImB6p0f1Mddik6aHqHiOv0wPzO0OISk9aX6B29ByUJ8OmNWbtSnxtDi214gdar3Uou0EknmdTQBiAtC89nV4awerlDo5XlclztuMtfrkYn2Raee1eG1r29qq3lq/IeqoWqikGfVIaCdUno/spQtrL02ErDphofcy/TAX3Nq5UqmZn9k/5dGVpflqJXEgdDraXxWw6iRVo7Y1OywYNKNb0Xhqo0pQG93COsjd7JMRaXnh8bq8hHubX9VrFm+S1lWLka+LhariezcOCNQedr24sHw9lwEPfA5TYae4NwNlkvV5Wr6ncpQyhw9bL4TBm+dpWXCeeUIceote7g5Dqwf/+i6DuvXWxphu9UVBYvg9B51ap1FGvH1u5+NXjOv60OU4XoNNvBtfmafzUzivCBH4dvNGcRZ+9hmfpec+O09k5T94rz3kjQVM/DymmmkVKWwGhGAmycJoy2RB7HCJMG7r11GujDU3ewUgzHNuDD4e9n1sXJ+R2bd6fWBHUE+nQSexdZws9QH+Bld23Y+RmLhl69C6lQNy8Du0Jm/ormglTmtvHfdCdyAqne4G2rTpi1BTJslHeEytHhHdgJEGRuCDw5rL4MVmLEukw3DqtVgRXCsboZZ17/0LqClh4LXh8fK2q2TELboeewzivDqi/hKq4q+OSNtWEjjVmD0h5vvBRoseFepTun3B5HCGy6OKvKH/LmLaAGEetiECv4vLknYwnXFayD3vu8+UOsqJjTNP5wHd5oEFLKzipo5ilD1gmlxvmpLvOI1HHKkDf5ZO4pwdp1qsJLGbKqC6Dmlzf0PaxaE4XDpPSZgxjXqi/euL6pmfvP/C/q3d1hHz+n14nMh54srgy581y6klvuSczRlSFe3V8R6t4g9lHTYYU67ypQhYX5s7PujSH/jL2jLJzRwNFmj1r9JqZ2fxcrYhs5W/DRb8G+Ea84xJlqnEXNJNcfPTPNzWg77H+Wnz9n/ozXHa5r27v2Ysh6115vLDKGrP/wX63AzHpIX2w6OYpbBcGN4SsPZVUjFhiyRp1bg9iPj7fWvhDuhUp3hv9iHW1+Lsa/WLGfn23SgJmf4r9F7HlevLBpdK2MwnyaBk5cmXtZJsr3+AvaJgWGrIHnFL1iKnHKHL94tmQ/GbK6UH+yZHDIGoSKSww5ZY0q8s2ZYS/PayuOCiCEOsfGp6SyCF/GkC1BohscwebVZN62ULUEdoLaQj+VjinaJhReCwx5FIZpsCBPuEY+v5QnwG4qx2DxTcWZBSJDjtok81gkDjUlVkjkqgftO/qNMI+bYcgfHsT/n2NIvxORYV/0CcTc+Ol8BSi5m4gUtpGrqXyDR54hdcssMiaK/vgs3Vx96sgpUqhAbrwVpqwWGBIHbLBhmcSGTUE/FSuxabd9G3VthjNKiHMYWG0iabFCaVQX71lBLdSXms8KIo3YNF8jDJz3ROoKY3XelPnL8n+X/IlQtDVeqy+5oayrhS4OBo0jJbS9wbPzCNepuTeP9o3K6gSZz7CEGJLdDT7DktB4QzYi2TaU10EynyWLLFOqRaoYWsx9HrBZX5A5T3bnAZOpDPMJF1QhPssznelcGpN7QfUqlYpJLe2o/H295UZlsak3vJphnygb9aELRvWJCpQ1w381Govq9eqGgFMtFI0To9PJVJ7pVtWSEFCFL3WNK1qrg8wGl/v6ZL691q7Q21VkeZNVeRn5ZIaTvp/aYDnShW16+YjGjC7AZmgYN9nGhJG+zfKRERouCUPPpjOljNY/cTDz44+4gcWYNzD7N8w1EzVhTowAHlyzU/nsAAQREB+1u6MVkakUkBfeRLtCFUBJAyzO0M0hp1jOADxhib/szR5YMBZl6E75J9fZ4YSd6YYzdINulRFjcUorht1SjNjhmLYMO9R4gmUL7Bm6swYGZQL4w1JaVRhyFjDiAA69qsGwAysV04LVGbp+uzJ1ZS6yqsuw3d4MGxFTnaEbNDerOg9s3A0BQ9ddN9YFKuCEnWpKw7ANjwqbyETH0J02e3pL+fgldoapv8E7tEPEykrHkzFMtyNDya0EI9BPYmCYcuT/jiPsBF0uhulaZWpiuOOrJj8Chq4b8rXz77HSP26GqSW35HA63peV5acIEoYpBtQfcm5rYatAxTCFR7cjNxHJ57uCkGG6WiOKAX6buIb2K4OUYYpgt6pls652WNUtDmqGF4RxNYtutKytGiTgYHhBGC1s0minRVTLcNGAi+EF/aE3npt4Hr9/olJtNiU4Gd4Q+MNdNO7tz5vTxzFJN+lvcjxtzovep7cb+nQyU4X/AcJBjnwVhA90AAAAAElFTkSuQmCC");
}
    .mainbox{
      /* background-color: rgba(0, 0, 0, 0.5); */
      background-image: url(75.png);
      background-size: 100% 100%;
      color: #000000;
      font-size: 100px;
      height: 900px;
      text-align:center;
      padding: 10%;
      z-index: 101;
      
    }
    .navbar {
      border-radius: 0;
      top: 0%;
      position: fixed;
      width: 100%;
      z-index: 99;

    }
    .feedbackbox{
      background-color:white;
      background-image: url("feedback.png");
      background-size: 100% 100%;
      width: 100px;
      height:100px;
      right:2%;
      bottom:3%;
      position: fixed;
      z-index: 100;
      border-radius:90%;
      overflow:hidden;
    }
    .mainbutton{
      width: 50px;
      height: 50px;
      bottom:5%;
      text-align:center;
    }
    html{
      scroll-behavior: smooth;
    }
    .img{
      background-image: url("icon.png");
      background-size: 100% 100%;
      height:150px%;
      width:150px;

      
    }
    .texttyping{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    font-size: 2rem;
    }
    .box{
      width: 150px;
      height: 150px;
      border-radius:90%;
      overflow:hidden;
      outline-color:#000000;
      outline-style:double;
      outline-width:3px;
      margin-top:50px;
    }
    .mybox{
      width:30%%;
      height:20%;
      position: absolute;
      left:250px;
      right:300px;
      margin-top:100px;
    }
    .profile{
      width: 100%;
      height: 100%;
      object-fit: cover;

    }
    .videoplayer{
      width:60%;
      height:30%;
    }
    #buttonbox{
      top:50%;
      background-color: #f2f2f2;
    }
    h1,h2,h3,h4,h5,h6{
      font-family: 'RixYeoljeongdo_Regular';
    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #000000;
      color:white;
      padding: 15px;
      text-align: center;
    }
    .projectbox{
      width: 100%;
      height: 100%;
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 50px;
    text-align:left;
    }
    .port_title {
    width: 100%;
    }
    .port_video{
      margin-right:5%;
      float:left;
    }
    img{
      display: block;
      width: 100%;
      height: 250px;
    }
    .dev{
      width: 100%;
      height: 100%;
      background-color:black;
      color:white;
      text-align:center;
      font-size:5em;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">포트폴리오</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#Home">Home</a></li>
        <li><a href="#About_Me">About Me</a></li>
        <li><a href="#Skills" >Skills</a></li>
        <li><a href="#Project">Project</a></li>
        <li><a href="#">||</a></li>
        <li><a href=" notice_board.php" >게시판</a></li>
        <li><a href="it.php">IT 동향</a></li>
        <?php
         if($_SESSION['username']=="taron"){
           echo "<li><a href=\"adminF.php\">피드백확인</a></li>";
         }else{
          echo "<li><a href=\"adminF.php\" style =\"visibility:hidden;\">피드백확인</a></li>";
         }
         ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <?php
       if(!$logincheck && $_COOKIE['user_id']==""){
        echo "<li> <a  href = \"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> login</a></li>";
      }else{
       
        echo "<li> <a  href = \"logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> logout</a></li>";
      } 
       ?>      
        <!-- echo "<li> <a style = "visibility:hidden" href = "login.php"><span class="glyphicon glyphicon-log-in"></span> admin</a></li>" -->
    
  <!-- span class="glyphicon glyphicon-log-in"></span> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div id = "id"></div>
        <?php
        $name;
          if($_COOKIE["user_id"!=""] || $_SESSION["username"]){
            echo "<li><a>ID:".$_SESSION['username']."</a></li>";
          }
          if($_COOKIE["user_id"!=""]){
          $name = $_COOKIE["user_id"];
        }else{
          $name =  $_SESSION["username"]; 
        }?>
      </ul>
    </div>
  </div>
  </nav>
<div id="Home"></div>
  <div class="mainbox">
    <div id=typeStyle style = "opacity:1.0;">
    </div>
</div>
<div>

<!-- <a class = "mainbutton" href="#">more</a> -->
</div>
<div id ="About_Me"></div>
<br>
<br>
<div class="container-fluid bg-3 text-center" style= "background-color:white;">
  <div class="container text-center">
    <h1>About Me</h1>
    <br>
    <div class = "row">
      <div class = "col-sm-4">
        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
        <h2>이름</h2><br>
        <h4> 김용준</h4><br>
      </div>
      <div class = "col-sm-4">
      <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
        <h2>생년월일</h2><br>
        <h4> 2005.09.02</h4><br>
      </div>
    <div class = "col-sm-4">
    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
        <h2>주소지</h2><br>
        <h4> 경기도 수원시</h4><br></div>
    </div>
    <div class = "row">
      <div class = "col-sm-4">
      <i class="fa fa-at fa-2x" aria-hidden="true"></i>
        <h2>이메일</h2><br>
        <h4> jgye8530@gmail.com</h4><br>
      </div>
      <div class = "col-sm-4">
      <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
        <h2>전화번호</h2><br>
        <h4> 010-5936-1978</h4><br>
      </div>
    <div class = "col-sm-4">
    <i class="fa fa-school fa-2x"></i>
        <h2>학력</h2><br>
        <h4> 삼일공업고등학교 재학</h4><br></div>
    </div>
    </div>
  </div>
    </div>
</div>
<br><br>
<br>
  <button class="feedbackbox" onclick="location.href='feedback.php'"></button>
<br>
<br>
<div class = "jumbotron" style="background-color:#4641D9" id ="Skills">
  <div class="container text-center">
    <h1 style ="color:white;">Skills</h1><br>
    <div class ="row">
      <div class = "col-sm-4">
        <div class ="projectbox">
          <div class ="port_title">
            <h2>Main-Language</h2><br>
          </div>
          <img src ="https://koenig-media.raywenderlich.com/uploads/2015/08/android_w_java.png"></img>
        </div>
      </div>
      <div class = "col-sm-4">
        <div class ="projectbox">
          <div class ="port_title">
            <h2>Back-end</h2><br>
          </div>
          <img src ="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDtFuT5ceuK8ZkeczOORESg991spQNj_7ZmA&usqp=CAU"></img>
        </div>
      </div>
      <div class = "col-sm-4">
        <div class ="projectbox">
          <div class ="port_title">
            <h2>etc.</h2><br>
          </div>
          <img src ="data:image/png;base64,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"></img>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron" style = "background-color:black;" id ="Project">
  <div class="container text-center">
    <h1 style ="color: white;">Project</h1><br><br><br>
    <div class ="projectbox"> <!-- 안드로이드 프로젝트 -->
        <div class ="port_title">
          <h1>안드로이드 기초작품</h1>
          <p>기여도 :100%</p>
        </div>
        <div class="row">
          <div class = "port_video" style="width:50%;"> 
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/8ALcl5AO_4s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
          <li style ="float:left;">제작기간:2022/02/17~2022/03/27</li>
          </div>
          <h3 style ="float:left;">To do list </h3>
          <br>
          <br><br><br><p>
            이 프로젝트는 자바를 바탕으로 안드로이드기초를 다지기 위해 만들게 된 작품입니다.
          </p><br>
          <p>이 작품을 만들면서 저는 안드로이드에 생명주기 등등을 공부했으며 기초적인 리사이클러뷰,핸들러 등을 작품에 적용했습니다.</p>
          <br>
          <p>해당 작품을 만들면서 일정관리가 중요한것을 알았습니다 다음 프로젝트를 진행할땐 일정관리를 하여 보다 효율적으로 프로젝트를 해야겠다고 생각했습니다.</p>
          <br>
          <li ><a href="https://www.youtube.com/embed/8ALcl5AO_4s">URL: https://www.youtube.com/embed/8ALcl5AO_4s</a> </li>
        </div>
      </div>
    <div class ="projectbox"> 
    <div class ="port_title">
          <h1>자바 기초작품</h1>
          <p>기여도 :100%</p>
        </div>
    <div class="row">
          <div class = "port_video" style="width:50%;"> 
            <iframe width="100%" height="415" src="https://www.youtube.com/embed/MnSUKxALZbs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
          <li style ="float:left;">제작기간:2022/01/13~2022/02/17</li>
          </div>
          <h3 style ="float:left;">아포칼립스 </h3>
          <br>
          <br><br><br><p>
            이 프로젝트는 자바의 기초를 다지기 위해 만들게 된 작품입니다.
          </p><br>
          <p>이 작품을 만들면서 저는 자바에 기본적인것들을 공부하며 객체지향과 클래스에 대해 깊게 공부하게 되었습니다.</p>
          <br>
          <p>해당 작품을 만들면서 저는 어떻게 공부해야 효율적으로 공부할 수 있는지 알게 되었고 시간관리가 중요하다는것을 깨닫게 되었습니다.</p>
          <li ><a href="https://www.youtube.com/embed/MnSUKxALZbs">URL: https://www.youtube.com/embed/MnSUKxALZbs</a> </li>
        </div><!-- 자바 프로젝트 -->
    </div>
  </div>
</div>
<footer>
<div>
  <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
  <p>TEL.010-5936-1978</p><br>
  <i class="fa fa-at fa-2x" aria-hidden="true"></i>
  <p>E-mail:jgye8530@gmail.com</p>
</div>
<div class="pictures icons">
<a  href="https://github.com/Taron8530" target="_blank">
        <div id="github" class="icon"></div>
</a>
<t></t>
<a href="https://taron-dev.tistory.com/" target="_blank">
    <div id="tistory" class="icon"></div>
</a>
 </div>
</footer>

</body>
</html>
