<?php  

 namespace BeeJee\Model;


abstract class Model
{
	const TABLE = '';
	public $id;
	 /**
     *Статический метод возвращающий всю информацию из базы данных
     *@return array
     */
	public static function findAll(...$params)
    {
     $column = $params[0]; 
     $start = $params[1];
     $num = $params[2];
	$dbn1 = Connect::instance();
	if($start === null && $num ===null && $column === null)
	{return $dbn1->query('SELECT * FROM '.static::TABLE, [],
    static::class);}
    else{
    //var_dump('SELECT * FROM '.static::TABLE .' ORDER BY '. $column . ' DESC LIMIT ' . $start.', '.$num,
    //static::class);
    return $dbn1->query('SELECT * FROM '.static::TABLE .' ORDER BY '. $column . ' DESC LIMIT ' . $start.', '.$num, [], static::class);  
    }
    }

    /**
     *Статический метод возвращающий запись по id из базы данных
     *@return array
     */
    public static function findById($id)
    {
    $dbn1 = Connect::instance();
      //var_dump('SELECT * FROM '.static::TABLE .' ORDER BY '. $column . ' DESC LIMIT ' . $start.', '.$num,
    //static::class);
    return $dbn1->query('SELECT * FROM '.static::TABLE . ' WHERE id=:id', [':id'=>$id],
    static::class);  
    
    }


     /**
     *Статический метод возвращающий колличество записей из базы данных
     *@return integer
     */
    public static function count()
    {
    $dbn1 = Connect::instance();
    $result = $dbn1->query('SELECT COUNT(*) FROM '.static::TABLE, [],
    static::class);
    $result = $result[0];
    $posts;
  foreach ($result as $key => $value) {
       if ($value === null) continue;
       else{$posts = intval($value);}
  }
    return $posts;
}



    

    public  function insert()
    {
    	if(!$this->isNew()){
    		return;
    	}
    	$key_ = array();
    	$value_ = array();
    	foreach ($this as $key => $value) {
    		if($key =='id'){
    			continue;
    		}
    		$key_ []= $key;
            $value_[$key]=$value;

    		
    	}
       
        $sql = 'INSERT INTO '.static::TABLE.' ('.implode(",", $key_).') VALUES ('.'"'.implode("\",\"", $value_).'"'.')';
      //  var_dump($sql);
        $dbn1 = Connect::instance();
       	$dbn1->execute($sql);
    

    }

     public  function isNew()
     {
        return empty($this->id);
    
    }

    

    public  function update()
    {
     /*   if($this->isNew()){
            return;
        }*/
        $id;
        $login;
        $password;

        foreach ($this as $key => $value) {
         if($key =='id'){
            $id=$value; 
        }
           if($key =='login'){
            $login=$value; 
        }

        if($key =='password'){
            $password=$value; 
        }


    }
     
       $sql=$id.$login.$password;
        $sql = 'UPDATE '.static::TABLE.' SET login= \''.$login.'\', password=\''.$password.'\' WHERE id='.$id;

        $dbn1 = Connect::instance();
        $dbn1->execute($sql);

          

    }

   







	}
?>