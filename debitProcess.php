<?php 
  require_once 'auth.php';
  require_once 'install.php';
  $username = $_SESSION['logged_in_username'];
  $amount = $_GET["amount"];
  $datee = date('Y-m-d');
  $pdo = new PDO($dsn);
  $sql = "INSERT INTO trans (user, mode, amount, transDate) VALUES (:username, 'withdraw', :amount, :datee)";
  $stmt = $pdo->prepare($sql);
  if($stmt->execute(array('username' => $username, 'amount' => $amount, 'datee' => $datee)))
  $sql = "UPDATE account SET balance=balance-:amount WHERE username=:username";
  $stmt = $pdo->prepare($sql);
  if($stmt->execute(array('username' => $username, 'amount' => $amount)))
  redirectAndExit('home.php');
?>

