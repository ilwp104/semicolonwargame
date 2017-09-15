<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wargame</title>
    <link rel="stylesheet" href="./css/index.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>
    <script type="text/javascript">
      function ChangeIframe(change) {
        if (change == "main") {
          $("#mainIframe").attr("src","./main.php");
          $(".main").css("background-color","#c8c8c8");
          $(".problem").css("background-color","#f8f8f8");
          $(".auth").css("background-color","#f8f8f8");
          $(".rank").css("background-color","#f8f8f8");
        }
        else if (change == "problem") {
          $("#mainIframe").attr("src","./problem.php");
          $(".main").css("background-color","#f8f8f8");
          $(".problem").css("background-color","#c8c8c8");
          $(".auth").css("background-color","#f8f8f8");
          $(".rank").css("background-color","#f8f8f8");
        }
        else if (change == "auth"){
          $("#mainIframe").attr("src","./auth.php");
          $(".main").css("background-color","#f8f8f8");
          $(".problem").css("background-color","#f8f8f8");
          $(".auth").css("background-color","#c8c8c8");
          $(".rank").css("background-color","#f8f8f8");
        }
        else if (change == "rank"){
          $("#mainIframe").attr("src","./rank.php");
          $(".main").css("background-color","#f8f8f8");
          $(".problem").css("background-color","#f8f8f8");
          $(".auth").css("background-color","#f8f8f8");
          $(".rank").css("background-color","#c8c8c8");
        }
      }
    </script>
    <header>
      <p style="font-size : 20px; margin : 0">Semicolon Wargame Site</p>
    </header>

    <article class="article">
      <nav class="MenuNav">
        <div class="Nav_icon">
          <img src="./img/semicolon_logo.png" class="semiicon" alt="세미 로고">
        </div>
        <div class="wrapNavMenu">
          <p class="main" onclick="ChangeIframe('main')">Main</p>
          <p class="problem" onclick="ChangeIframe('problem')">Problem</p>
          <p class="auth" onclick="ChangeIframe('auth')">Auth</p>
          <p class="rank" onclick="ChangeIframe('rank')">Rank</p>
          <p class="homepage" onclick="location.href='http://semi2012.godohosting.com/';">Semicolon Page</p>
        </div>
      </nav>

      <iframe id="mainIframe" src="./main.php"></iframe>
    </article>
  </body>
</html>
