<?php 
  require_once 'auth.php';
  require_once 'install.php';
  if(!isLoggedIn())
  	redirectAndExit('index.php');
  $username = $_SESSION['logged_in_username'];
  $pdo = new PDO($dsn);
  $sql = "SELECT balance, location FROM account WHERE username == :username";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array('username' => $username, ));
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
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

  <div class="columns">
    <div class="column is-half is-offset-one-quarter">

      <div class="tabs is-centered">
        <ul>
          <li>
            <a href="\">
              <span class="icon is-small"><i class="fa fa-image"></i></span>
              <span>Overview</span>
            </a>
          </li>
          <li>
            <a href="/history.php">
              <span class="icon is-small"><i class="fa fa-music"></i></span>
              <span>Full History</span>
            </a>
          </li>
          <li>
            <a href="/credit.php">
              <span class="icon is-small"><i class="fa fa-film"></i></span>
              <span>Credit</span>
            </a>
          </li>
          <li class="is-active">
            <a href="/withdraw.php">
              <span class="icon is-small"><i class="fa fa-file-text-o"></i></span>
              <span><b>Withdraw</b></span>
            </a>
          </li>
        </ul>
      </div>

      <h1 class="title">Withdraw money</h1>
      <h2 class="subtitle">Take how much ever you need :D</h2>

      <form method="get" action="/debitProcess.php">
        <div class="field has-addons">
          <p class="control">
            <span class="select is-medium">
              <select>
                <option selected>₹</option>
              </select>
            </span>
          </p>
          <p class="control">
            <input class="input is-medium" type="text" placeholder="Amount of money" name="amount">
          </p>
          <p class="control">
            <input type="submit" class="button is-medium is-success" value="Take away!">
          </p>
        </div>
      </form>

    </div>
  </div>

  <script src="./jq.js"></script>
  <script>
    $(".button").click(function(){
      $(".button").addClass("is-loading");
    });
  </script>

  </body>
</html>
