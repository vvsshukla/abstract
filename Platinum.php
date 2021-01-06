<?php
// require './Customer.php';
class Platinum extends Customer{
      public function calculateRewardPoints($payment){
            $this->payment = $payment;
            if($this->payment < 500){
               $this->rewardPoints = 5; 
            }elseif ($this->payment < 750) {
               $this->rewardPoints = 10;
            }else{
               $this->rewardPoints = 15;
            }
      }    
}
// $platinum = new Platinum("Vaibhav Shukla", "vaibhav125shukla@gmail.com", "9420364769");
// $platinum->calculateRewardPoints(975);
// $platinum->print();