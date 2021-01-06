<?php
abstract class Customer{
    protected $name, $email, $contact, $rewardPoints;
    abstract protected function calculateRewardPoints($payment);

    public function __construct($customer_details=array())
    {
        $this->name = $customer_details['name'];
        $this->email = $customer_details['email'];
        $this->contact = $customer_details['contact'];
        // $this->payment = $payment;
    }

    // public static function registration($name, $email, $contact){
    //     $customer = new self($name, $email, $contact);
    //     $customer->print();        
    // }

    public function print(){
        echo"Customer Details:".$this->name.", ".$this->email.", ".$this->contact;
        echo"<br/>Order Amount:".$this->payment;
        echo"<br/>Reward Points:".$this->rewardPoints;
    }
}

//Customer::registration("Vaibhav Shukla", "vaibhav125shukla@gmail.com", "9420364769");