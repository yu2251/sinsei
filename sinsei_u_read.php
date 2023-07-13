<?php
include("functions.php");
session_start();
check_session_id();
$pdo = connect_to_db();

$name = $_SESSION['name']; // ログインユーザの名前
$sql = 'SELECT * FROM basic_data1 WHERE name = :name ORDER BY id ASC';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}
$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録確認画面</title>
</head>
<body>
<fieldset>
  <h1>登録確認画面ー<?= $_SESSION['name'] ?>さんー</h1>
    <tr>
    <a href="sinsei_u_edit.php">編集画面</a>
    <a href="sinsei_logout.php">ログアウト</a>
    </tr>
      <div>
        <p>名前:<?= $record["name"] ?></p>
      </div>
      <div>
        <p>電話番号:<?= $record["tel"] ?></p>
      </div>
      <div>
        <p>性別:<?= $record["sex"] ?></p>
      </div>
      <div>
        <p>年齢:<?= $record["age"] ?></p>
      </div>
      <div>
        <p>郵便番号:<?= $record["postn"] ?></p>
      </div>
      <div>
        <p>住所:<?= $record["address"] ?></p>
      </div>
      <div>
        <p>銀行名:<?= $record["bank"] ?>銀行</p>
      </div>
      <div>
        <p>登録日:<?= $record["deadline"] ?></p>
      </div>
      <section>
  </fieldset>
</body>
</html>