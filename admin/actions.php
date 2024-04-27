<?php

session_start();
include 'src/config/db.php';

$GLOBALS["conn"] = $conn;

include 'src/functions/yt.php';
include 'src/functions/speaker.php';
include 'src/functions/user.php';

if (function_exists("addYoutubeVid") && function_exists("addSpeaker") && function_exists("addUser")) {
  if (isset($_GET["login"])) {
    login($_POST);
  } else if (count($_GET) == 0) {
    echo "up";
  } else if (isset($_SESSION["loggedin"])) {
    if (isset($_GET["logout"])) {
      session_destroy();
      header('Location: login.php');
    } else if (isset($_GET["add"])) {
      switch ($_GET["add"]) {
        case 'ytvid':
          addYoutubeVid($_POST["ytid"]);
          break;
        case 'speaker':
          addSpeaker($_POST, $_FILES);
          break;

        case 'user':
          addUser($_POST);
          break;
      }
    } else if (isset($_GET["reorder"])) {
      switch ($_GET["reorder"]) {
        case 'ytvid':
          reorderYouTubeVid($_GET["order"]);
          break;
      }
    } else if (isset($_GET["delete"])) {
      switch ($_GET["delete"]) {
        case 'ytvid':
          deleteYTvid($_GET["id"]);
          break;

        case 'user':
          deleteUser($_GET["id"]);
          break;
      }
    } else if (isset($_GET["edit"])) {
      switch ($_GET["edit"]) {
        case 'ytvid':
          editYTvid($_GET["id"], $_GET["newId"]);
          break;
      }
    }
  }
} else {
  http_response_code(500);
  echo "down";
}

mysqli_close($conn);
