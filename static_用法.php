<?php
class car{
	private static $speed=10;
	//访问内部类私有属性，静态用self，非静态用this
	public static function getSpeed(){
		return self::$speed;
	}
	public static function SpeedUp(){
		return self::$speed+=10;
	}
}
class bigcar extends car{
	public static function start(){
		parent::SpeedUp();
	}
}
	bigcar::start();
//静态方法中，伪变量$this不允许使用，可以使用self、parent、static在内部调用静态方法与属性
	echo bigcar::getSpeed();//访问静态属性或方法，类名::属性/方法