<?php 
namespace BeeJee\Model;
class View implements \Countable
{
	protected $data = [];
	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	
	}
	public function __get($k)
	{
		return $this->data[$k];
	}
	public function render($url)
	{
		ob_start();
		foreach ($this->data as $property => $value) {
			$$property = $value;
		}
		include $url;
		$content = ob_get_contents();
		ob_end_clean();
		return($content);
	}
	public function __isset($k)
	{
		switch ($k) {
			case $k:
				return true;
				break;
			
			default:
				return false;
				break;
		}

	}
	/**
	*@return string
	*/
	public function display($url)
	{
		echo $this->render($url);
	}
	public function count()
	{
		return count($this->data);
	}
}
?>