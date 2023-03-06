<?php

class Fund{
    private $fund;
    function __construct($initialFund=0){
        $this->fund=$initialFund;
    }
    function addFund($money){
        $this->fund += $money;
    }
    function deductFund($money){
        $this->fund -= $money;
    }
    function getTotal(){
        echo "Total fund is : {$this->fund} Tk.\n";
    }
}
$myFund=new Fund();
$myFund->addFund(100);
$myFund->getTotal();
