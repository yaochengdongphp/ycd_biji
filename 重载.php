<?php
/* php�е�������ָ��̬�Ĵ������Ժͷ�������ͨ��ħ��������ʵ�ֵģ����Ե�����ͨ��__set/__get/__isset/__unset
 * ���ֱ�ʵ�ֶԲ��������Եĸ�ֵ����ȡ���ж������Ƿ����á��������ԡ�
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
$car->name='����';
echo $car->name;
?>