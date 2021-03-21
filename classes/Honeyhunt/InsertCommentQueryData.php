<?php

namespace Honeyhunt;

class InsertCommentQueryData extends QueryData
{
  public function queryString($data) {
    $recordString = "INSERT INTO comments (userId, comment) VALUES ('%s', '%s');";
    $insertQuery = \sprintf($recordString, $data['userId'], $data['comment']);
    return $insertQuery;
  }

  public function queryToDataBase($formdata, $db) {
    if ($db->connect->connect_errno) {
      exit();
    } elseif ($db->connect->host_info) {
      $res = $db->connect->query($this->queryString($formdata));
      return $db->connect->insert_id;
    }
  }
}
