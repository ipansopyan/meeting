<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo $base_url?>Public/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
      <div class='container '>

        <div class="login-page">
          <?php if ($_SESSION['pesan'] != null): ?>
            <div class="alert alert-warning">
              <?php echo $_SESSION['pesan'] ?>
            </div>
          <?php endif; ?>
  <div class="form">
    <form class="login-form" method="post" action="?meeting=registered" >
      <input required name="name" type="text" placeholder="name"/>
      <input required name="email" type="email" placeholder="email"/>
      <input required name="phone" type="text" placeholder="phone"/>
      <input required name="address" type="text" placeholder="address"/>
      <input required name="password" type="password" placeholder="password"/>
      <button type="submit" name="submit" value="register" >login</button>
      <p class="message"><a href="<?php echo $base_url.'?meeting=login' ?>">Login</a></p>
    </form>
  </div>
</div>


      </div>
    </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
