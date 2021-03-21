<?php

namespace Honeyhunt;

abstract class QueryData
{
  abstract function queryString($data);
  abstract function queryToDataBase($formdata, $db);
}
