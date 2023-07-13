<?php
include("functions.php");
session_start();
check_session_id();

if (
  !isset($_POST['name']) || $_POST['name'] === '' ||
  !isset($_POST['tel']) || $_POST['tel'] === ''||
  !isset($_POST['sex']) || $_POST['sex'] === '' ||
  !isset($_POST['age']) || $_POST['age'] === '' ||
  !isset($_POST['postn']) || $_POST['postn'] === '' ||
  !isset($_POST['address']) || $_POST['address'] === '' ||
  !isset($_POST['bank']) || $_POST['bank'] === ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$name = $_POST['name'];
$tel = $_POST['tel'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$postn = $_POST['postn'];
$address = $_POST['address'];
$bank = $_POST['bank'];

$pdo = connect_to_db();

// $shapesData = json_encode($shapeInfoList);;


$sql = 'INSERT INTO basic_data1(id, name, tel, sex, age, postn, address, bank) VALUES (NULL, :name, :tel, :sex, :age, :postn, :address, :bank)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':tel', $tel, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':postn', $postn, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':bank', $bank, PDO::PARAM_STR);
// $stmt->bindValue(':shapes', $shapesData, PDO::PARAM_STR);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:sinsei_u_read.php");
exit();
