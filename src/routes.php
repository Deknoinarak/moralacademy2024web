<?php

require_once __DIR__ . "/layout.php";
require_once __DIR__ . "/functions.php";

if (isset($_GET["id"])) {
  $historyInfo = getLecturer($_GET["id"]);

  if (!$historyInfo || !isset($historyInfo["history"])) {
    echo file_get_contents("src/404.html");
    http_response_code(404);
    return;
  }

  layout("/views/history.php");
} else {
  layout("/views/index.php");
}
