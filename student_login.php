<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
session_start();

if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

include_once 'config.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Student Registration System</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/css/stylesheet.css">

</head>


<body>
  <div class="content-wrap">
    <!-- Hero section -->
    <header class="jumbotron display-4 text-white pl-4 text-center">
      <h1>Welcome to the</h1>
      <h1>⏰ Student Schedule Registration System 📖</h1>
      <h3>More updates to functionality coming soon. Please check back again soon.</h3>
      <h1>👷🏾‍♀️🚧👷🏻</h1>
      <br>
  </div>
  </header>
  <main role="main">
    <!-- Log in section -->
    <section class="container">
      <div class="form-container border p-4">
        <h3 class="text-center">Student Log in Page</h3>
        <form method="POST" action="student_authenticate.php">
          <!-- CSRF token -->
          <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

          <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" class="form-control" id="username" name="username" placeholder="user name" required>
          </div>
          <br>
          <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
          </div>
          <br>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-primary d-inline-block mb-2 mr-md-2">Login</button>
            <a href="index.php" class="btn btn-link"><strong>Home</strong></a>
          </div>
        </form>
      </div>
    </section>
    </div>
  </main>


  <!-- Footer -->
  <footer class="bg-darker text-center text-white container">
    <div class="footer-copyright text-center py-3">
      <!-- Footer links -->
      &nbsp;&copy;
      <?php echo date("Y"); ?> University Scheduling App. Super Coders All Rights Reserved.
    </div>
  </footer>
  </div>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>