<?php
//public���������κεط������ʣ�
//protected�������ڱ��ࡢ���ࡢ�����н��з��ʣ�
//private�������ڱ�����з��ʡ�
//���Ա���дȨ�ޣ��������Բ�д��Ĭ��Ϊpublic��
//������캯��������˽�з�����������ֱ��ʵ���������ˣ����������ͨ����̬��������ʵ����
//�����ģʽ�о����������ķ��������ƶ���Ĵ��������絥��ģʽֻ������һ��ȫ��Ψһ�Ķ���
class car{
	private function __construct(){
		echo 'object create';
	}
	
	private static $_object=NULL;
	public static function getInstance(){
		if (empty(self::$_object)){
			self::$_object=new car();//�ڲ��������Ե���˽�з��������������Դ�������
		}
		return self::$_object;
	}
}
$car=car::getInstance();

