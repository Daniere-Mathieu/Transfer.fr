  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <?php include_once("views/partials/head.php") ?>
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
              <a href="download/<?=$data[1] ?>">download/<?=$data[1] ?></a>
            </div>
          </div>
        </div>
      </main>
      <?php include_once("partials/footer.php") ?>
    </body>
  </html>
