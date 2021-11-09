<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php include_once("partials/head.php") ?>
  <body>
    <?php include_once("partials/header.php") ?>
    <main class="main_home">
      <div class="div_main_home">
        <form class="form_main_home" action="../controllers/importController.php" method="post" enctype="multipart/form-data">
          <div class="div_form_main_home">
            <input type="text" name="name" placeholder="Nom" class="text_form">
            <input type="file" name="file" class="file_form">
            <button type="submit" name="button" class="button_form">Envoyez</button>
          </div>
        </form>
      </div>
    </main>
      <?php include_once("partials/footer.php") ?>
  </body>
</html>
