<?php

include 'src/config/db.php';

$GLOBALS["conn"] = $conn;

include 'src/functions/yt.php';
include 'src/functions/speaker.php';

if (function_exists("addYoutubeVid")) {
  if (isset($_GET["add"])) {
    switch ($_GET["add"]) {
      case 'ytvid':
        addYoutubeVid($_POST["ytid"]);
        break;

      case 'speaker':
        addSpeaker($_POST, $_FILES);
        break;

      default:
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    }
  } else if (isset($_GET["reorder"])) {
    switch ($_GET["reorder"]) {
      case 'ytvid':
        reorderYouTubeVid($_GET["order"]);
        break;

      default:
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    }
  } else if (isset($_GET["delete"])) {
    switch ($_GET["delete"]) {
      case 'ytvid':
        deleteYTvid($_GET["id"]);
        break;

      default:
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    }
  } else if (isset($_GET["edit"])) {
    switch ($_GET["edit"]) {
      case 'ytvid':
        editYTvid($_GET["id"], $_GET["newId"]);
        break;

      default:
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    }
  } else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
} else {
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

mysqli_close($conn);
