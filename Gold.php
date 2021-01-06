<?php
// require_once './Customer.php';
class Gold extends Customer{
    public function calculateRewardPoints($payment)
    {   
        $this->payment = $payment;
        if($payment < 1000){
           $this->rewardPoints = 5;  
        }else{
           $this->rewardPoints = 10;
        }        
    }
}
// $gold = new Gold("Vaibhav Shukla", "vaibhav125shukla@gmail.com", "9420364769");
// $gold->calculateRewardPoints(975);
// $gold->print();