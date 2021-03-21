<?php

namespace Honeyhunt;

class CommentSelectQueryData extends QueryData
{
  function queryString($data) {
    $queryinstr = "SELECT users.`name` as `users_name`, users.`email` as `users_email`, comments.`comment` FROM comments INNER JOIN users ON (comments.`userId`=users.`id`);";
    return $queryinstr;
  }

  public function queryToDataBase($formdata, $db) {
    if ($db->connect->connect_errno) {
      exit();
    } elseif ($db->connect->host_info) {
      $result = $db->connect->query($this->queryString($formdata));
      return $this->resultToArray($result);
    }
  }

  function resultToArray($result) {
    $resultArr = array();
    while (($row = $result->fetch_assoc()) != false) {$resultArr[] = $row;}
    return $resultArr;
  }
}
