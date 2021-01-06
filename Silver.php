<?php
// require './Customer.php';
class Silver extends Customer{
    public function calculateRewardPoints($payment){
        $this->payment = $payment;
        if($payment < 1250){
            $this->rewardPoints = 5; 
        } else {
            $this->rewardPoints = 10;
        }
    }
}

// $silver = new Silver("Vaibhav Shukla", "vaibhav125shukla@gmail.com", "9420364769");
// $silver->calculateRewardPoints(975);
// $silver->print();