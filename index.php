<?php
require './Customer.php';
// require './Silver.php';
// require './Gold.php';
// require './Platinum.php';
require './Payment.php';
$customer_details = array("name" => "Vaibhav Shukla", "email" => "vaibhav125shukla@gmail.com", "contact" => "9420364769");
$category = "Silver";
$order_amount = 975;
$payment = new Payment($category, $order_amount, $customer_details);
$payment->pay();