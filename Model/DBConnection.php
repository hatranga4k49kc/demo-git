<?php 
namespace Model;
use PDO;

class DBConnection //class kết nối CLDL
{
  public $dsn;
  public $user;
  public $password;

  public function __construct($dsn, $user, $password)
  {
      $this->dsn = $dsn;
      $this->password = $password;
      $this->user = $user;
  }

  public function connect(){
      return new PDO($this->dsn, $this->user, $this->password);
  }
}

 ?>