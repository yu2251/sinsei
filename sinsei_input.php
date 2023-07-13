<?php
include("functions.php");
session_start();
check_session_id();
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>申請フォーム入力画面</title>
</head>
<body>
<form action="sinsei_create.php" method="POST">
    <fieldset>
      <h1>ようこそ！<?= $_SESSION['name'] ?>さん</h1>
      <p>下記を入力してください</p>
      <a href="sinsei_logout.php">ログアウト</a>
      <div>
        名前: <input type="text" name="name" value="<?= $_SESSION['name'] ?>">
      </div>
      <div>
        TEL: <input type="text" name="tel">
      </div>
      <div>
        性別: <select name="sex">
                <option value="男">男</option>
                <option value="女">女</option>
              </select>
      </div>
      <div>
        年齢: <input type="number" maxlength="3" name="age" size="3">
      </div>
      <div>
        郵便番号: <input id="input" class="zipcode" type="text" name="postn">
        <button id="search" type="button">住所検索</button><td id="error"></td>
      </div>
      <div>
        住所: <input id='address1' type="text" name="address" size="30">
      </div>
      <div>
        銀行名: <input type="text" name="bank" >銀行
      </div>
      <section>
      </section>
        <button type="submit">登録</button>
      </div>
    </fieldset>
</form>
  <script>
  </script>

</body>
</html>