<?php
session_start();
require_once 'install.php';

function tryLogin(PDO $pdo, $username, $password)
{
    $sql = "SELECT password FROM user WHERE username == :username";
    $stmt = $pdo->prepare($sql);
-   $stmt->execute(array('username' => $username, ));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    if($row['password']==$password)
    {
        return true;
    }
}

function login($username)
{
    session_regenerate_id();
    $_SESSION['logged_in_username'] = $username;
}

function isLoggedIn()
{
   return isset($_SESSION['logged_in_username']);
}

function redirectAndExit($script)
{
    $relativeUrl = $_SERVER['PHP_SELF'];
    $urlFolder = substr($relativeUrl, 0, strrpos($relativeUrl, '/') + 1);
    $host = $_SERVER['HTTP_HOST'];
    $fullUrl = 'http://'.$host.$urlFolder.$script;
    header('Location: '.$fullUrl);
    exit();
}

$username = '';
if ($_POST)
{
    $pdo = new PDO($dsn);
    $username = $_POST['username'];
    $ok = tryLogin($pdo, $username, $_POST['password']);
    if ($ok)
    {
        login($username);
        redirectAndExit('home.php');
    }
    else
        $failed = true;
    	redirectAndExit('failed.php');
}
?>