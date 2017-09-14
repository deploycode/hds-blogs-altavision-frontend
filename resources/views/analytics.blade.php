<?php
  switch (config('disease')) {
    case '1':
      require_once('analytics/ambliopia-analyticstracking.php');
    break;
    case '2':
      require_once('analytics/astigmatismo-analyticstracking.php');
    break;
    case '3':
      require_once('analytics/baja-vision-analyticstracking.php');
    break;
    case '4':
      require_once('analytics/catarata-analyticstracking.php');
    break;
    case '5':
      require_once('analytics/conjuntivitis-analyticstracking.php');
    break;
    case '6':
      require_once('analytics/degeneracion-macular-analyticstracking.php');
    break;
    case '7':
      require_once('analytics/estrabismo-analyticstracking.php');
    break;
    case '8':
      require_once('analytics/glaucoma-analyticstracking.php');
    break;
    case '9':
      require_once('analytics/hipermetropia-analyticstracking.php');
    break;
    case '10':
      require_once('analytics/lentes-analyticstracking.php');
    break;
    case '11':
      require_once('analytics/miopia-analyticstracking.php');
    break;
    case '12':
      require_once('analytics/ojo-seco-analyticstracking.php');
    break;
    case '13':
      require_once('analytics/parpados-analyticstracking.php');
    break;
    case '14':
      require_once('analytics/presbicia-analyticstracking.php');
    break;
    case '15':
      require_once('analytics/pterigion-analyticstracking.php');
    break;
    case '16':
      require_once('analytics/queratocono-analyticstracking.php');
    break;
    case '17':
      require_once('analytics/retinopatia-diabetica-analyticstracking.php');
    break;
    case '18':
      require_once('analytics/uveitis-analyticstracking.php');
    break;
    default:
      require_once('analytics/ambliopia-analyticstracking.php');
    break;
  }

?>
