<?php
session_start();
require_once("../models/ImportModel.php");
if (!empty($_SESSION["id"])) {
  $data = ImportModel::getImport($_SESSION["id"]);
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <?php include_once("partials/head.php") ?>
    <body>
      <?php include_once("partials/header.php") ?>
      <main class="main_sucess">
        <div class="div_sucess_main">
          <div class="sucess_div_main">
            <h1>votre fichier a bien été téléchargé</h1>
            <div class="center_text_div">
              <h3>voici le token de supression</h3>
              <p><?= $data[4]?></p>
            </div>
            <div class="center_text_div">
              <h3>voici le lien pour telecharger le fichier</h3>
              <a href="download.php?name=<?=$data[1] ?>">http://localhost:8888/transfer.fr/views/download.php?name=<?=$data[1] ?></a>
            </div>
          </div>
        </div>
      </main>
      <?php include_once("partials/footer.php") ?>
    </body>
  </html>
<?php }
else {
  header('Location: home.php');
} ?>
