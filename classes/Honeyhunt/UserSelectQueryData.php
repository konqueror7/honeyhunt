<?php

namespace Honeyhunt;

class UserSelectQueryData extends QueryData
{
  function queryString($data) {
    $recordString = "SELECT `id` FROM users WHERE users.`name` = '%s' AND users.`email` = '%s';";
    $selectQuery = \sprintf($recordString, $data['name'], $data['email']);
    return $selectQuery;
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
