<?php
class car{
	public $speed=0;
	
	public function speedUp() {
		$this->speed+=10;
		return $this->speed;
	}
}
	//����̳�car��Truck��
	class Truck extends car{
		public function speedUp() {
			$this->speed=parent::speedUp()+50;
			return $this->speed;
		}	
	}
	$car=new Truck();
	$car->speedUp();
	echo $car->speed;