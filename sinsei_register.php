<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ登録画面</title>
</head>
<body>
<form action="sinsei_register_act.php" method="POST">
      <h1>ユーザ登録画面</h1>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div>
        <button>登録</button>
      </div>
      <a href="sinsei_login.php">or ログイン</a>
    </fieldset>
</form>
</body>
</html>