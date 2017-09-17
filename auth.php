<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wargame</title>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/auth.css">
    <main>
      <div class="auth">
        <p>Flag</p>
        <form class="AuthSend" action="authmatch.php" method="post">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="auth">
            <label class="mdl-textfield__label" for="sample1">입력해주세요</label>
          </div>
          <input class="mdl-button mdl-js-button SubmitBtn" type="submit" value="Submit">
        </form>
      </div>
    </main>
  </body>
</html>
