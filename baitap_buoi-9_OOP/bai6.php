<?php
abstract class Database
{
  protected $connection ;
  protected $connectionActive ;

  abstract public function setConnection( $dbName ) ;
  abstract public function getConnection( ); 
}

class DBConnection extends Database 
{
  public function __construct($connection, $connectionActive)
  {
    $this->connection = $connection ;
    $this->connectionActive = $connectionActive ;
  }
  public function setConnection( $dbName ) 
  {
    $this->connectionActive = true ;
  }

  public function getConnection( ) 
  {
    if ( $this->connectionActive ) 
      echo "{$this->connection}";
  }
}

$db = new DBConnection("Thuan",false);
$db->setConnection( "thuan" );
$db->getConnection() ;
?>