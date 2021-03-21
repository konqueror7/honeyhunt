<?php

namespace Honeyhunt;

require 'autoload.php';

$db = New DataBaseConnect();
$query = New CommentSelectQueryData();

if (!$db->connect->error) {
  $responseArray = $query->queryToDataBase(Array(), $db);
  $response = ["success" => true, "result" => $responseArray];
  echo json_encode($response);
}

$db->connect->close();
