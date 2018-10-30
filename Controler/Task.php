<?php 
namespace BeeJee\Controler;
//include 'Controler/controler.php';

class Task
{
	   public static $count = 0;
	   public function __construct()
	   {
	   	$this->view = new \BeeJee\Model\View();
	   }
        
        public function action($action)
        {
             try {
        	if($action != null){
        	$metodName = 'action'.$action;
        	$this->beforeactiom();
        	return $this->$metodName();
            }
        	else{
        	$metodName = 'action'.$action;
        	$this->beforeactiom();
        	return $this->$metodName();	
        	}
            
            }catch(Exception $ex){
            	$ex = new \BeeJee\Exception\Core();
                throw $ex;
            }
        }
        protected function beforeactiom()
        {
            include 'Controler/login.php';

        }
		protected function actionIndex()
		{
		 include 'Controler/message.php';
	   	$this->view->message = \BeeJee\Model\Message::findAll($sort, $start, $num);
		$this->view->total = $params[3];
		$this->view->page = $params[4];
		$this->view->title = 'СПИСОК ЗАДАЧ';
		$this->view->display('View/index.php');}
		

	    protected function actionOne()
	    {
	    $id = (int)$_GET['id'];
	    $this->view->message = \BeeJee\Model\Message::findById($id);
		$this->view->title = 'ЗАДАЧА';
		$this->view->display('View/index.php');}
		
		
	    
}


?>