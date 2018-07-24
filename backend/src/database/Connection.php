<?php

namespace Blog\Database;

use PDO;

class Connection
{
  private $dbDrive = "mysql";
  private $host = "db_blog";
  private $dbName = "blog";
  private $user = "blog";
  private $pass = "blog";
  private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
  protected $con;

  public function openConnection()
  {
    try
    {
      $this->con = new PDO("mysql:host=db_blog;dbname=blog", $this->user, $this->pass, $this->options);
      return $this->con;
    }
    catch (PDOException $e)
    {
      echo "There is some problem in connection: " . $e->getMessage();
    }
  }

  public function closeConnection()
  {
    $this->con = null;
  }
}
