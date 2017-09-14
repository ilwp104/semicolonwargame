<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wargame</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>


  <header>
    <p style="font-size : 20px; margin : 0">Semecolon Wargame Site</p>
    <nav class="sign">
      <a class="" href="">Login</a>
      <a class="" href="">Signup</a>
    </nav>
  </header>

  <article class="article">
    <nav class="MenuNav">
      <span class="header">MENU</span>
      <div class="wrapmenu">
        <p class="" onclick="location.href='http://www.naver.com';">Login</p>
        <p class="" onclick="location.href='';">Signup</p>
        <p class="" onclick="location.href='';">main</p>
        <p class="" onclick="location.href='';">Problem</p>
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

      <div class="chat">
        <div class="ChatHeader">
          <p>Chat</p>
        </div>
        <div class="ChatArticle">
          <?php
          //DB연결하기
          //DB chat 내용 넣기
          echo "<p></p>";
          ?>
        </div>
        <div class="ChatFooter">
          <form class="chatform" action="from.php" method="get" onsubmit="">
            <input type="text" class="ChatText" name="ChatText" placeholder="입력해주세요">
            <input type="submit" value="Send" onclick="checkfuc();">
          </form>
        </div>
      </div>
    </div>
  </main>
</article>

  <script type="text/javascript">
    function checkfuc() {
      if($(".ChatText").text()==""){
        return false;
      }
    }
  </script>
  </body>
</html>
