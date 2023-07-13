<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    <h1>申請フォームログイン画面</h1>
    <form action="sinsei_login_act.php" method="POST">
      <div>
        <tr>名前:<input type="text" name="name"></tr>
      </div>
      <div>
       <tr>password:<input type="text" name="password"></tr>
      </div>
      <div>
        <button>ログイン</button>
      </div>
      <a href="sinsei_register.php">or 新規登録</a>
    </form>

</body>
</html>