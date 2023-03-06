<?php

class Human
{
    public $name;
    public $age;
    function __construct($name,$age=0){
        $this->name=$name;
        $this->age=$age;
    }
    public function sayName()
    {
        if($this->age){
            echo "My name is {$this->name}. I am {$this->age} years old.\n";
        }else{
            echo "My name is {$this->name}. I don`t no.\n";
        }
        
    }
}
$obj=new Human("Rakib",24);
$obj->sayName();
$obj2=new Human("Tamim");
$obj2->sayName();
