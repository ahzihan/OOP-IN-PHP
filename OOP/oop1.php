<?php

class Human{
    public $name;
    function sayHay(){
        echo "Salam\n";
        $this->sayName();
    }
    function setName($name){
        $this->name=$name;
    }
    function sayName(){
        echo "My name is {$this->name}\n";
    }
}

class Cat{
    function sayHay(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHay(){
        echo "Woof\n";
    }
}

$obj1=new Human();

$obj1->setName("Md Akbar Hossain");//Set Name

$obj2=new Cat();
$obj3=new Dog();

$obj1->sayHay();
$obj2->sayHay();
$obj3->sayHay();

// $obj1->sayName();
echo $obj1->name;//Get Name