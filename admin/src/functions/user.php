<?php

function addUser($post)
{
  header("Content-Type: application/json; charset=utf-8");

  foreach (["firstname", "lastname", "email", "role", "password", "confirm_password"]
    as $field) {
    if (!isset($post[$field])) {
      http_response_code(400);
      echo json_encode([
        "msg" => "Please fill in all fields.",
        "success" => false,
      ]);
      return;
    }
  }

  $fname = $post["firstname"];
  $lname = $post["lastname"];
  $email = $post["email"];
  $role = $post["role"];
  $password = $post["password"];
  $confirm_password = $post["confirm_password"];

  $test = [$fname, $lname, $role, $password, $confirm_password];

  if ($password !== $confirm_password) {
    http_response_code(400);
    echo json_encode([
      "msg" => "Password and confirm password are not the same.",
      "success" => false,
    ]);
    return;
  }

  $sql = "SELECT id FROM users WHERE email='$email'";
  $result = mysqli_query($GLOBALS["conn"], $sql);

  if (mysqli_num_rows($result) > 0) {
    http_response_code(400);
    echo json_encode([
      "msg" => "There's already a user with this email address.",
      "success" => false,
    ]);
    return;
  }

  $password = password_hash($password, PASSWORD_BCRYPT);

  $query = "INSERT INTO users (email, firstname, lastname, role, password) VALUES ('$email', '$fname', '$lname', '$role', '$password')";

  if (mysqli_query($GLOBALS["conn"], $query)) {
    http_response_code(200);
    echo json_encode([
      "msg" => "Account created successfully.",
      "success" => true,
    ]);
    return;
  }

  http_response_code(500);
  echo json_encode([
    "msg" => "There's something wrong. Please try again.",
    "success" => false,
  ]);
  return;
}

function deleteUser($id)
{
  $query = "DELETE FROM users WHERE id='$id'";
  mysqli_query($GLOBALS['conn'], $query);

  http_response_code(200);
  echo json_encode([
    "msg" => "Account deleted successfully.",
    "success" => true,
  ]);
  return;
}

function login($post)
{
  header("Content-Type: application/json; charset=utf-8");

  foreach (["email", "password"]
    as $field) {
    if (!isset($post[$field])) {
      http_response_code(400);
      echo json_encode([
        "msg" => "Please fill in all fields.",
        "success" => false,
      ]);
      return;
    }
  }

  $email = $post['email'];
  $password = $post['password'];

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($GLOBALS['conn'], $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($post['password'], $row["password"])) {
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['details'] = $row;

        http_response_code(200);
        echo json_encode([
          "msg" => "Login successful",
          "success" => true,
        ]);
        return;
      }
    }
  } else {
    http_response_code(401);
    echo json_encode([
      "msg" => "Please check if your email/password are typed correctly.",
      "success" => false,
    ]);
    return;
  }

  http_response_code(500);
  echo json_encode([
    "msg" => "There's something wrong. Please try again.",
    "success" => false,
  ]);
  return;
}
