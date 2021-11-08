<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transfer.fr</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
    <header class="header_home">
      <div class="left_side_header">
        <h1>Tranfer.fr</h1>
      </div>
      <div class="right_side_header">
        <p><a href="/Applications/MAMP/htdocs/transfer.fr/views/home.php">Accueil</a></p>
        <div class="">
          <form>
            <input type="search" id="searchInput" name="searchInput" placeholder="WIP">
          </form>
        </div>
      </div>
    </header>
    <main class="main_home">
      <div class="div_main_home">
        <form class="form_main_home" action="../controllers/importController.php" method="post" enctype="multipart/form-data">
          <input type="text" name="name" placeholder="Nom" class="text_form">
          <input type="file" name="file" class="file_form">
          <button type="submit" name="button" class="button_form">Envoyez</button>
        </form>
      </div>
    </main>
    <footer class="footer">
      <h4>site made with love by Rihya</h4>
    </footer>
  </body>
</html>
