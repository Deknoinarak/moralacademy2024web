<?php

include 'includes/header.php';
include 'src/config/db.php';

switch ($_GET["page"]) {
  case 'yt':
    include_once 'src/core/yt.php';
    break;

  case 'lecturers':
    include_once 'src/core/lecturers.php';
    break;

  case 'users':
    include_once 'src/core/users.php';
    break;

  default:
    include_once '../404.html';
    break;
}

mysqli_close($conn);

include 'includes/footer.php';
