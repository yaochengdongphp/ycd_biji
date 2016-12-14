<?php
//public：可以在任何地方被访问；
//protected：可以在本类、父类、子类中进行访问；
//private：可以在本类进行访问。
//属性必须写权限；方法可以不写但默认为public；
//如果构造函数定义了私有方法，则不允许直接实例化对象了，解决方法：通过静态方法进行实例化
//在设计模式中经常用这样的方法来控制对象的创建，比如单例模式只允许有一个全局唯一的对象。
class car{
	private function __construct(){
		echo 'object create';
	}
	
	private static $_object=NULL;
	public static function getInstance(){
		if (empty(self::$_object)){
			self::$_object=new car();//内部方法可以调用私有方法，因此这里可以创建对象
		}
		return self::$_object;
	}
}
$car=car::getInstance();

