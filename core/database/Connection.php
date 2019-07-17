<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection
{
  /**
   * Create a new PDO connection.
   *
   * @param array $config
   * @return PDO
   */
  public static function make($config)
  {
    try {
      return new PDO(
        $config['dns'] . ':host=' . $config['host'] . ';port=' . $config['port'] . ';dbname=' . $config['name'] . ';user=' . $config['user'] . ';password=' . $config['password']);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
