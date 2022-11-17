<?php
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
        header('Location: login.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuHkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>HOME</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
        <div class="container">
            <a href="index.php" class="navbar-brand">LES.WEB</a>
            <button class="navbar-toggler" type="button" data-togle="collapse">
                <span class="navbar-togler-icon"></span>
            </button>
            <ul class="navbar-nav ml-auto pt-2 pb-2">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-light">HOME</a>
                </li>
                <li class="nav-item ml-4">
                    <a href="logout.php" class="nav-link text-light">LOG OUT</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid bg-light" style="height: 90hv;">
        <div class="container">
            <h1 class="display-4 text-center mt-4">Selamat Datang 😊</h1>
            <p class="lead text-center">LOGIN OR REGISTER SUCCESSFULLY</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rTDNEpUTHQoQUJMHLrErGJyHg89uy71MyuHH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>