<?php

function getLecturer($id)
{
  $GLOBALS["id"] = $id;

  $str = file_get_contents(__DIR__ . '/../assets/data/lecturers.json');
  $json = json_decode($str, true);

  $filtered = array_values(array_filter($json, function ($value) {
    return ($value["id"] == $GLOBALS["id"]);
  }));

  if(empty($filtered)) {
    return false;
  }
  else {
    return $filtered[0];
  }
}
