<?php

namespace App\Core\Database;

use Exception;
use PDO;

class QueryBuilder
{
  /**
   * The PDO instance.
   *
   * @var PDO
   */
  protected $pdo;

  /**
   * Create a new QueryBuilder instance.
   *
   * @param PDO $pdo
   */
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  /**
   * Select all records from a database table.
   *
   * @param string $table
   * @return array
   */
  public function selectAll($table)
  {
    $statement = $this->pdo->prepare("select * from {$table}");

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  /**
   * Select a record from a database table.
   *
   * @param string $record
   * @param string $table
   * @param $data
   * @return array
   */
  public function selectWhere()
  {
    // $statement = $this->pdo->prepare("SELECT {$record} FROM {$table} WHERE pseudo = {$data}");
    // faut m'expliquer pourquoi cette putain de requête de merde fonctionne pas hein ...
    $statement = $this->pdo->prepare("SELECT pseudo FROM users WHERE pseudo = 'ravaniss'");
    // ntm ça fait 2h.
    $statement->execute();

    return $statement->fetch(PDO::FETCH_OBJ);
  }


  /**
   * Insert a record into a table.
   *
   * @param string $table
   * @param array $parameters
   */
  public function insert($table, $parameters)
  {
    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)),
      ':' . implode(', :', array_keys($parameters))
    );

    try {
      $statement = $this->pdo->prepare($sql);

      $statement->execute($parameters);
    } catch (Exception $e) {
      //
    }
  }
}
