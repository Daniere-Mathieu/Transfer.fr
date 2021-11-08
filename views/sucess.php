<?php
session_start();
require_once("../models/ImportModel.php");
if (!empty($_SESSION["id"])) {
  $data = ImportModel::getImport($_SESSION["id"]);
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <h1>votre fichier a bien été téléchargé</h1>
      <div class="">
        <h3>voici le token de supression</h3>
        <p><?= $data[4]?></p>
      </div>
      <div class="">
        <h3>voici le lien pour telecharger le fichier</h3>
        <a href="download.php?name=<?=$data[1] ?>">http://localhost:8888/transfer.fr/views/download.php?name=<?=$data[1] ?></a>
      </div>
    </body>
  </html>
<?php }
else {
  header('Location: home.php');
} ?>
