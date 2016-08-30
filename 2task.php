<?php
abstract class Vehicle()
{
	$brand;
	$model;
	$price;
public function getBrand()
{
	echo this->brand;

}
public function getModel()
{
	echo this->model;

}
public function getPrice()
{
	echo this->price;

}
abstact function StartEngine();
abstact function StopEngine();
abstact function printData();
}
class Car extends Vehicle()
{
	$horsePower;
	$weight;
	$color;
	public function StartEngine()
	{
		echo "The engine of the car is started" ;
	}
	public function StopEngine()
	{
		echo "The engine of the car is stopped" ;
	}
	public function getHorsePower()
	{
		echo this->horsePower;
	}
	public function getWeight()
	{
		echo this->weight;
	}
}
public function getColor()
	{
		echo this->color;
	}
	function __constructor($horsePower,$weight,$color,$brand,$model,$price){
this->horsePower=horsePower;
this->weight=weight;
this->color=color;
this->brand=brand;
this->model=model;
this->price=price;
	}

}
class Bus extends Vehicle()
{
	$seats;
	$disablePeople;
	$totalCapacity;
	public function StartEngine()
	{
		echo "The engine of the car is started" ;
	}
	public function StopEngine()
	{
		echo "The engine of the car is stopped" ;
	}
	public function getSeats()
	{
		echo this->seats;
	}
	public function getDisablePeople()
	{
		echo this->disablePeople;
	}
}
public function getTotalCapacity()
	{
		echo this->totalCapacity;
	}
	function __constructor($seats,$disablePeople,$totalCapacity,$brand,$model,$price){
this->seats=seats;
this->disablePeople=disablePeople;
this->totalCapacity=totalCapacity;
this->brand=brand;
this->model=model;
this->price=price;
	}

}
}
object $Lada=new Car("450","2000kg","white","Lada","Niva","1lv");
$Lada->getHorsePower();
$Lada->getColor();
$Lada->StartEngine();
$Lada->StopEndine();
//No time for more