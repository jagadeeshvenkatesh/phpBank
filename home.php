<?php 
require_once 'auth.php';
if(!isLoggedIn())
	redirectAndExit('index.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Internet Banking System</title>
    <!-- Stylesheet -->
    <link href="./bulma.css" rel="stylesheet" type="text/css" />

  </head>

  <body>

  <section class="hero is-success">
    <div class="hero-body">
      <div class="container">
        <a class="button is-danger logOut is-pulled-right" href="/logout.php">Log out</a>
        <h1 class="title">
          You're logged in!
        </h1>
        <h2 class="subtitle">
          Hello there <b>@<?php echo $_SESSION['logged_in_username'] ?></b>
        </h2>
      </div>
    </div>
  </section>

  <section class="hero is-light has-text-centered">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Your bank details
        </h1>
        <div class="columns">
          <div class="column is-half is-offset-one-quarter">

          </div>
        </div>
      </div>
    </div>
  </section>

  </body>
</html>
