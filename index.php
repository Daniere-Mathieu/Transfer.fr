<?php
  session_start();
  $url = explode($_SERVER["REQUEST_URI"]);

  switch ($url) {
    case 'home':
    // diriger home.php
      break;
      case 'sucess':
      // diriger sucess.php
        break;
      case 'fail':
      // diriger fail.php
        break;
      case 'download':
      // diriger download.php
        break;
      case 'controller':
        break;
    default:
      // diriger home.php
      break;
  }





 ?>
