<?php 
require_once 'auth.php';
if(isLoggedIn())
  redirectAndExit('home.php');
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
        <h1 class="title">
          Bank of CSE3002
        </h1>
        <h2 class="subtitle">
          Built with <b>php</b> and <b>sqlite</b>.
        </h2>
      </div>
    </div>
  </section>

  <section class="hero is-light has-text-centered">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Login
        </h1>
        <div class="columns">
          <div class="column is-half is-offset-one-quarter">
            <div class="box">
              <form method="post" action="auth.php">
                <input class="input" type="text" placeholder="Username" name="username" required>
                <input class="input" type="password" placeholder="Password" name="password" required>
                <input type="submit" class="button is-success"></a>
              </form>
              <br>
              <a href="#content" id="showCreds" class="is-pulled-left has-text-primary">[show sample users]</a><br>
              <div class="content">
                <table>
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>jeremy</td>
                      <td>password</td>
                    </tr>
                    <tr>
                      <td>vishhvak</td>
                      <td>abc123</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="./jq.js"></script>
  <script>
    $("#showCreds").click(function(){
    $(".content").show();
    });
  </script>

  </body>
</html>
