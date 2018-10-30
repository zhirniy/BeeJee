<?php 
  namespace BeeJee\Model;
 
  class Connect
  {
  use Single;
  protected $dbn;
  protected function __construct()
  {
    try{
    $this->dbn = new \PDO('mysql:host=localhost; dbname=beejee', 'root', '21072013');
    }
    catch (\PDOException $e){
    $ex = new \BeeJee\Exception\Connect();
    throw $ex;
  }
    
  }
  public function execute($sql, $params = [])
  {
   $sth = $this->dbn->prepare($sql);
   $res = $sth->execute($params);
   return $res;
}
   public function query($sql, $params, $class)
   {
   $sth = $this->dbn->prepare($sql);
   $res = $sth->execute($params);
   if(false !== $res){
   	return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
   }
   return [];
  }

 
}



?>
