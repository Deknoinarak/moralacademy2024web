<?php

function addSpeaker($post, $files)
{
  $name = $post["name"];
  $role = $post["role"];
  $img = $files["img"];
  $sub = $post["sub"];
  $history = "";

  // Check whether user inputs are empty 
  if (!empty($files["img"]["name"])) {
    $image_source = file_get_contents($files["img"]['tmp_name']);
    $img = uploadToImgur(base64_encode($image_source));
  }

  if (!empty($files["history"]["name"])) {
    $image_source = file_get_contents($files["history"]['tmp_name']);
    $history = uploadToImgur(base64_encode($image_source));
  }

  $query = 'SELECT COUNT(*) as count FROM lecturers';
  $result = mysqli_query($GLOBALS["conn"], $query);
  $row = mysqli_fetch_array($result);
  $currentLevel = $row[0] + 1;

  $name = mysqli_real_escape_string($GLOBALS["conn"], $name);
  $role = mysqli_real_escape_string($GLOBALS["conn"], $role);
  $sub = mysqli_real_escape_string($GLOBALS["conn"], $sub);

  $query = "INSERT INTO lecturers (name, role, subtitle, img, history, display_order) VALUES ('$name', '$role', '$sub', '$img', '$history', '$currentLevel')";

  if (mysqli_query($GLOBALS["conn"], $query)) {
    header("Location: content.php?page=lecturers&error=0");
  } else {
    header("Location: content.php?page=lecturers&error=1");
  }
}

function uploadToImgur($base64)
{
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image');
  curl_setopt($ch, CURLOPT_POST, TRUE);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID 546c25a59c58ad7'));
  curl_setopt($ch, CURLOPT_POSTFIELDS, array('image' => $base64));
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $response = curl_exec($ch);

  $response = json_decode($response, true);

  if (!empty($response["data"]["link"])) {
    return $response["data"]["link"];
  }

  return false;
}
