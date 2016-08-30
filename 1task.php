<?php
interface mammal()
{public function talk();
public function walk();
}
abstract class person implements mammal(){
private $name="Pesho";
private $age=17;
private $gender="Male";
public function namePrint(){
echo this->name;
}
public function agePrint(){
echo this->age;;
}
public function agePrint(){
echo this->gender;
}
functoin __constructor(name,age,gender)
{
	this->name=name;
	this->age=age;
	this->gender=gender;
	
}
}


abstract class animal implements mammal(){
private $name="NoName";
private $age="over120";
private $gender="Don't know";
public function namePrint(){
echo this->name;
}
public function agePrint(){
echo this->age;
}
public function agePrint(){
echo this->gender;
}
functoin __constructor(name,age)
{
	this->name=name;
	this->age=age;
	this->gender=gender;
}

}
class dolphin extends animal()
{
function talk()
{
	
	echo this->name;
	echo this->age;
}
}
class student extends person()
{function talk()
	{
echo this->name;
echo this->age;
echo this->gender;
}
}
