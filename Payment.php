<?php
require './Silver.php';
require './Platinum.php';
require './Gold.php';
class Payment {
    private $amount, $category, $customer_details;
    private $silver, $gold, $platinum;
    
    function __construct($category, $amount, $customer_details = array()){
        $this->category = $category;
        $this->amount = $amount;
        $this->customer_details = $customer_details;
    }
    
    public function pay(){
        switch ($this->category) {
            case 'Silver':
                $this->silver = new Silver($this->customer_details);
                $this->silver->calculateRewardPoints($this->amount);
                $this->silver->print();
                break;
            case 'Gold':
                $this->gold = new Gold($this->customer_details);
                $this->gold->calculateRewardPoints($this->amount);
                $this->gold->print();
                break;
            case 'Platinum':
                $this->platinum = new Platinum($this->customer_details);
                $this->platinum->calculateRewardPoints($this->amount);
                $this->platinum->print();
                break;
            default:
                break;
        }
    }
}