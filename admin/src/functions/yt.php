<?php

function addYoutubeVid($id)
{
  $trim_id = trimYTid($id);

  $query = 'SELECT COUNT(*) as count FROM videos';
  $result = mysqli_query($GLOBALS["conn"], $query);
  $row = mysqli_fetch_array($result);
  $currentLevel = $row[0] + 1;

  $query = "INSERT INTO videos (video_id, level) VALUES ('$trim_id', '$currentLevel')";

  if (mysqli_query($GLOBALS["conn"], $query)) {
    header("Location: content.php?page=yt&error=0");
  } else {
    header("Location: content.php?page=yt&error=1");
  }
}

function reorderYouTubeVid($order)
{
  $order  = explode(",", $_GET["order"]);
  for ($i = 0; $i < count($order); $i++) {
    $sql = "UPDATE videos SET level='" . $i + 1 . "' WHERE id=" . $order[$i];
    mysqli_query($GLOBALS["conn"], $sql) or die("database error:" . mysqli_error($GLOBALS["conn"]));
  }
}

function deleteYTvid($id)
{
  $query = "DELETE FROM videos WHERE id='$id'";
  mysqli_query($GLOBALS['conn'], $query);
}

function editYTvid($id, $newId)
{
  $newId  = trimYTid($newId);

  $query = "UPDATE videos SET video_id='$newId' WHERE id='$id'";
  mysqli_query($GLOBALS['conn'], $query);
}

function trimYTid($id)
{
  if (strpos($id, "youtu.be") !== false) {
    $trim_id = substr(parse_url($id, PHP_URL_PATH), 1);
  } else if (parse_url($id, PHP_URL_QUERY)) {
    parse_str(parse_url($id, PHP_URL_QUERY), $trim_id);
    $trim_id = $trim_id["v"];
  } else {
    $trim_id = $id;
  }

  return $trim_id;
}
