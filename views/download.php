<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include_once("views/partials/head.php") ?>
  <body>
    <?php include_once("views/partials/header.php") ?>
    <main class="main_sucess">
      <div class="div_sucess_main">
        <div class="sucess_div_main">
          <h1><?= $dataDL[1]?></h1>
          <h3><?=$filename[1] ?></h3>
          <a href="<?= $dataDL[5]?>" download>download here</a>
          <form class="" action="controllerDelete" method="post">
            <input type="text" name="token" value="" placeholder="token de supression">
            <input type="hidden" name="file" value="<?php echo $name ?>">
            <button type="submit" name="button">Supprimer</button>
          </form>
        </div>
      </div>
    </main>
    <?php include_once("views/partials/footer.php") ?>
  </body>
</html>
