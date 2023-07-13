<?php
// var_dump($_POST);
include('functions.php');
session_start();

// データ受け取り
$name = $_POST['name'];
$password = $_POST['password'];

// DBに接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM basic_data1 WHERE name=:name AND password=:password';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

try {
    $status = $stmt->execute();
  } catch (PDOException $e) {
    echo json_encode(["sql error" => "{$e->getMessage()}"]);
    exit();
  }
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

// ユーザ有無で条件分岐
if (!$user) {
  echo "<p>ログイン情報に誤りがあります</p>";
  echo "<a href=sinsei_login.php>ログイン</a>";
  exit();
}

// ユーザが存在する場合の処理
$_SESSION['name'] = $user['name'];

if ($user['is_admin'] === 1) {
  $_SESSION['is_admin'] = true;
  header("Location: sinsei_read.php");
  exit();
}else if($user['is_admin'] === 1){
  $_SESSION['is_admin'] = true;
  $_SESSION = array();
  $_SESSION['session_id'] = session_id();
  $_SESSION['is_admin'] = $user['is_admin'];
  $_SESSION['name'] = $user['name'];
  header("Location:sinsei_read.php");
  exit();
}else {
  $_SESSION['is_admin'] = false;
  $_SESSION = array();
  $_SESSION['session_id'] = session_id();
  $_SESSION['is_admin'] = $user['is_admin'];
  $_SESSION['name'] = $user['name'];
  header("Location:sinsei_u_read.php");
  exit();
}
