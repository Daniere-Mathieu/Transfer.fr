<?php
 if (!empty($_SESSION["Error"])) {
   $error = htmlentities($_SESSION["Error"]);
   ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <?php include_once("views/partials/head.php") ?>
    </head>
    <body>
      <?php include_once("views/partials/header.php") ?>
      <main class="main_sucess">
        <h1><?php echo $error; ?></h1>
      </main>
    <?php include_once("views/partials/footer.php") ?>
    </body>
  </html>

<?PHP }
  unset($_SESSION["Error"]);
?>
