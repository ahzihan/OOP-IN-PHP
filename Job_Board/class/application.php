<?php
class Application{
    private $jobID;
    private $name;
    private $email;
    private $phone;
    public function __construct($jobID,$name,$email,$phone){
        $this->jobId=$jobID;
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
    }
    public function save(){
        return true;
    }
}