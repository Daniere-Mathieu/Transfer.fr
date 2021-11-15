<?php
session_start();
require_once("../models/ImportModel.php");
if (!empty($_GET["name"])) {
  $name = htmlentities($_GET["name"]);
}
else {
  header('Location: ../views/fail.php');
  die();
}
if (ImportModel::verificationName($name)) {
  $data = ImportModel::getImportByName($name);
  $filename = explode("/",$data[5]);

}
else {
  header('Location: ../views/fail.php');
  die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once("partials/head.php") ?>
  <body>
    <?php include_once("partials/header.php") ?>
    <main class="main_sucess">
      <div class="div_sucess_main">
        <div class="sucess_div_main">
          <h1><?= $data[1]?></h1>
          <h3><?=$filename[2] ?></h3>
          <a href="<?= $data[5]?>" download>download here</a>
          <form class="" action="../controllers/deleteController.php" method="post">
            <input type="text" name="token" value="" placeholder="token de supression">
            <input type="hidden" name="file" value="<?php echo $_GET["name"] ?>">
            <button type="submit" name="button">Supprimer</button>
          </form>
        </div>
      </div>
    </main>
    <?php include_once("partials/footer.php") ?>
  </body>
</html>
