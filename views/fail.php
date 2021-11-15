<?php session_start();
 if (!empty($_SESSION["Error"])) {
   $error = htmlentities($_SESSION["Error"]);
   ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
    <h1><?php echo $error; ?></h1>
    </body>
  </html>

<?PHP } ?>
