<?php

namespace Honeyhunt;

require 'autoload.php';

$db = New DataBaseConnect();
$userselectquery = New UserSelectQueryData();

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["comment"])) {
  $formdata = Array("name" => $_POST["name"], "email" => $_POST["email"], "comment" => $_POST["comment"]);
}

$usersarray = $userselectquery->queryToDataBase($formdata, $db);

if (count($usersarray) == 0) {
  $createuser = New InsertUserQueryData();
  $userId = $createuser->queryToDataBase($formdata, $db);

} else {
  $userId = $usersarray[0]["id"];
}

$insertcomment = New InsertCommentQueryData();
$commentdata = Array("userId" => $userId, "comment" => $formdata["comment"]);

if ($insertcomment->queryToDataBase($commentdata, $db)) {
  $response = ["success" => true, "result" => $db->connect->insert_id];
  echo json_encode($response);
}

$db->connect->close();
