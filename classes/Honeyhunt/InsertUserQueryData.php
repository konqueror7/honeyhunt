<?php

namespace Honeyhunt;

class InsertUserQueryData extends QueryData
{
  public function queryString($data) {
    $recordString = "INSERT INTO users (name, email) VALUES ('%s', '%s');";
    $insertQuery = \sprintf($recordString, $data['name'], $data['email']);
    return $insertQuery;
  }

  public function queryToDataBase($formdata, $db) {
    if ($db->connect->connect_errno) {
      exit();
    } elseif ($db->connect->host_info) {
      if ($res = $db->connect->query($this->queryString($formdata))) {
        return $db->connect->insert_id;
      } else {
        $db->connect->error;
      }
    }
  }
}
