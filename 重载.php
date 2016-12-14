<?php
/* php中的重载是指动态的创建属性和方法，是通过魔术方法来实现的，属性的重载通过__set/__get/__isset/__unset
 * 来分别实现对不存在属性的赋值、读取，判断属性是否设置、销毁属性。
 */
 header('content-type:text/html;charset=utf-8');
class car
{
	private $ary=array();
	
	public function __set($key,$val){
		$this->ary[$key]=$val;
	}
	public function __get($key){
		if (isset($this->ary[$key])){
			return $this->ary[$key];
		}else {return null; }
	}
	public function __isset($key) {
		if(isset($this->ary[$key])){
			return true;
		}else {return false;}
	}
	public function __unset($key){
		unset($this->ary[$key]);
	}
} 
$car=new car();
$car->name='汽车';
echo $car->name;
?>