<!doctype html>
<html lang="th">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/newbie.css">

    <title>Hello, world!</title>
  </head>
  <body>
    



<div class="container-fluid">
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb m-3">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
  <div class="row">
    <div class="col-12 col-sm-3">
      <a href="index.php?p=register"> สมัครสมาชิก </a>
    </div>
    <div class="col-6 col-sm-3">
      <a href="index.php?p=login">  </a>
    </div>
    <div class="col-6 col-sm-3">
      One of three columns
    </div>
    <div class="col-12 col-sm-3">
      One of four columns
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-3">
      One of three columns
    </div>
    <div class="col-6 col-sm-3">
      One of three columns
    </div>
    <div class="col-6 col-sm-3">
      One of three columns
    </div>
    <div class="col-12 col-sm-3">
      One of four columns
    </div>
  </div>
</div>


<?php
if ($_GET['p']=='register'){
  include ('register.php');
}else
if ($_GET['p']=='login'){
  include ('login.php');
}
?>




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>