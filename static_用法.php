<?php
class car{
	private static $speed=10;
	//�����ڲ���˽�����ԣ���̬��self���Ǿ�̬��this
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
//��̬�����У�α����$this������ʹ�ã�����ʹ��self��parent��static���ڲ����þ�̬����������
	echo bigcar::getSpeed();//���ʾ�̬���Ի򷽷�������::����/����