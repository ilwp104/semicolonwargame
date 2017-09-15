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
    $(function (){
      $(".loginHeader p:nth-child(1)").css("background-color","#c8c8c8");
    });
      function changelogin(){
          $(".loginArticle").css("display","block");
          $(".signupArticle").css("display","none");
          $(".loginHeader p:nth-child(1)").css("background-color","#c8c8c8");
          $(".loginHeader p:nth-child(2)").css("background-color","#f1f1f1");
      }
      function changesignup(){
          $(".loginArticle").css("display","none");
          $(".signupArticle").css("display","block");
          $(".loginHeader p:nth-child(1)").css("background-color","#f1f1f1");
          $(".loginHeader p:nth-child(2)").css("background-color","#c8c8c8");
      }
    </script>

      <header>
        <p style="font-size : 20px; margin : 0">Semecolon Wargame Site</p>
      </header>

      <article class="article">
        <nav class="MenuNav">
          <div class="Nav_icon">
            <img src="./img/semicolon_logo.png" class="semiicon" alt="세미 로고">
          </div>
          <div class="wrapNavMenu">
            <p class="" onclick="location.href='index.php';">Main</p>
            <p class="" onclick="location.href='problem.php';">Problem</p>
            <p class="" onclick="location.href='flag.php';">Flag</p>
            <p class="" onclick="location.href='http://semi2012.godohosting.com/';">Semicolon Page</p>
          </div>
        </nav>

      <main>
        <p>Welcome to Semecolon Wargame Site</p>
        <div class="WrapContent">
          <div class="notice">
            <div class="NoticeHeader">
              <p>Notice</p>
            </div>
            <div class="NoticeArticle">
              <?php
              //DB chat 내용 넣기
              echo "<p></p>";
              ?>
            </div>
          </div>

          <div class="login">
            <div class="loginHeader">
              <p onclick="changelogin();">Login</p>
              <p onclick="changesignup();">SignUp</p>
            </div>

            <div class="loginArticle">
              <form class="loginform" action="login.php" method="post">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" name="id" type="text" id="sample3">
                 <label class="mdl-textfield__label" for="sample3">Id</label>
               </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" name="password" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">Password</label>
                </div>

                <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" value="Login">
              </form>
            </div>

            <div class="signupArticle">
              <form class="signupform" action="signup.php" method="post">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" name="nickname" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">닉네임</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                 <input class="mdl-textfield__input" name="id" type="text" id="sample3">
                 <label class="mdl-textfield__label" for="sample3">아이디</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" name="password" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">비밀번호</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" name="name" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">이름</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" name="phonenum" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">전화번호</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" name="shool" type="text" id="sample3">
                  <label class="mdl-textfield__label" for="sample3">소속학교</label>
                </div>

                <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit" value="Signup">
              </form>
            </div>

          </div>
        </div>
      </main>
    </article>
  </body>
</html>
